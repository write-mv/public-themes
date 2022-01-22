<?php

use WriteMv\Themes\Components;

return [

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all components that should be loaded for your app.
    | By default all components from themes are loaded in. You can
    | disable or overwrite any component class or alias that you want.
    |
    */

    'components' => [

        //Root Components
        'last-seen' => Components\LastSeen::class,

        //Layout components
        'theme-layout' => Components\Layouts\ThemeLayout::class,
        'footer'       => Components\Layouts\Footer::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all the Livewire components that should be loaded
    | for your app. By default all components from themes are loaded in.
    |
    */

    'livewire' => [
        'like-button' => Components\Interactions\LikeButton::class,
    ],

    'prefix' => 'themes',

    'assets' => [

        'alpine' => 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js',

    ],
];
