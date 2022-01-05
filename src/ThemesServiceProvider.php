<?php

namespace WriteMv\Themes;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\Blade;
use WriteMv\Themes\Components\LivewireComponent;
use WriteMv\Themes\Components\BladeComponent;
use Illuminate\Support\Str;
use WriteMv\Themes\Console\PublishCommand;
use Livewire\Livewire;

final class ThemesServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/themes.php', 'themes');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
            ]);
        }
    }


    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {

        $this->bootResources();
        $this->bootBladeComponents();
        $this->bootLivewireComponents();
        $this->bootDirectives();
        $this->bootPublishing();
    }

    private function bootResources(): void
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'themes');
    }

    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = config('themes.prefix', '');
            $assets = config('themes.assets', []);

            /** @var BladeComponent $component */
            foreach (config('themes.components', []) as $alias => $component) {
                $blade->component($component, $alias, $prefix);

                $this->registerAssets($component, $assets);
            }
        });
    }

    private function bootLivewireComponents(): void
    {
        // Skip if Livewire isn't installed.
        if (!class_exists(Livewire::class)) {
            return;
        }

        $prefix = config('themes.prefix', '');
        $assets = config('themes.assets', []);

        /** @var LivewireComponent $component */
        foreach (config('themes.livewire', []) as $alias => $component) {
            $alias = $prefix ? "$prefix-$alias" : $alias;
            

            Livewire::component($alias, $component);

            $this->registerAssets($component, $assets);
        }
    }

    private function registerAssets($component, array $assets): void
    {
        foreach ($component::assets() as $asset) {
            $files = (array) ($assets[$asset] ?? []);

            collect($files)->filter(function (string $file) {
                return Str::endsWith($file, '.css');
            })->each(function (string $style) {
                Theme::addStyle($style);
            });

            collect($files)->filter(function (string $file) {
                return Str::endsWith($file, '.js');
            })->each(function (string $script) {
                Theme::addScript($script);
            });
        }
    }

    private function bootDirectives(): void
    {
        Blade::directive('themeStyles', function (string $expression) {
            return "<?php echo WriteMv\\Themes\\Theme::outputStyles($expression); ?>";
        });

        Blade::directive('themeScripts', function (string $expression) {
            return "<?php echo WriteMv\\Themes\\Theme::outputScripts($expression); ?>";
        });
    }

    private function bootPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/themes.php' => $this->app->configPath('themes.php'),
            ], 'themes-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => $this->app->resourcePath('views/vendor/themes'),
            ], 'themes-views');
        }
    }
}
