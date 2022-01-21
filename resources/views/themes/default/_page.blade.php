<x-themes-theme-layout>

    <article class="max-w-4xl mx-auto px-6 pt-24 pb-16">
        <header class="max-w-2xl mx-auto flex flex-col @if (!$page->is_english) items-end @endif">
            <h1 class="mt-5 mb-8 text-[2.5rem] lg:text-[5rem] leading-none text-ink @if (!$page->is_english) aammu @else font-display font-bold @endif"  @if (!$post->is_english) dir="rtl" @endif>
                {{ ucfirst($page->title) }}
              </h1>
            <p class="
                flex items-center text-xs uppercase tracking-wider font-medium text-ink">
                <span>{{ $page->published_date->format('Y-m-d') }}</span>
                </p>
        </header>

        <main class="my-16 markup text-ink" @if (!$post->is_english) dir="rtl" @endif>
            {!! $page->getRenderedHtmlContent() !!}
        </main>

        <x-themes-footer />
    </article>
</x-themes-theme-layout>
