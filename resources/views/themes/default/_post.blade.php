<x-themes-theme-layout>
    <article class="max-w-4xl mx-auto px-6 pt-24 pb-16">
        <header class="max-w-2xl mx-auto flex flex-col @if (!$post->is_english) items-end @endif">
            <a class="font-semibold hover:underline inline-flex items-center text-ink"
                href="{{ route('domain.posts.index', ['name' => $blog->name]) }}">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.25 8.75L7.75 12L11.25 15.25" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M16.25 8.75L12.75 12L16.25 15.25" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>

                <span>Back</span>
            </a>
            <h1 class="mt-5 mb-8 text-[2.5rem] lg:text-[5rem] leading-none text-ink @if (!$post->is_english) aammu @else font-display font-bold @endif"  @if (!$post->is_english) dir="rtl" @endif>
                {{ $post->title }}</h1>
            <p class="
                flex flex-col md:flex-row @if (!$post->is_english) items-end @endif md:items-center text-xs uppercase tracking-wider
                font-medium text-ink">
                <span>{{ $post->published_date->format('Y-m-d') }}</span>
                <span class="-mt-3 mx-2 font-display text-xl">.</span>

                @if ($post->show_author)
                    <span>Written by {{ $post->display_name }}</span>
                @endif
                <x-themes-last-seen :post="$post" />
                </p>

                <div class="text-sunsetdark mt-5">
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('domain.tags.show', ['name' => $blog->name, 'tag' => $tag->slug]) }}"
                            class="text-sm font-light hover:underline cursor-pointer @if (!$loop->first) ml-2 @endif">
                            #{{ $tag->name }}</a>
                    @endforeach

                </div>

                @if ($post->featured_image)
                    <div class="flex flex-col items-center justify-center">
                        <img class="object-cover mb-5 bg-center rounded"
                            src="{{ $post->featuredImageUrl() }}" alt="Featured Image">
                        <p class="text-sm text-gray-400 mt-1">{{ $post->featured_image_caption }}</p>
                    </div>
                @endif
        </header>



        <main class="my-12 markup text-ink" @if (!$post->is_english) dir="rtl" @endif>
            {!! $post->getRenderedHtmlContent() !!}
        </main>

        <aside class="max-w-2xl mx-auto flex justify-between">
            <p class="flex items-center text-sm uppercase tracking-wider font-medium text-ink">
                <a class="font-semibold hover:underline inline-flex items-center text-ink"
                    href="{{ route('domain.posts.index', ['name' => $blog->name]) }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.25 8.75L7.75 12L11.25 15.25" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16.25 8.75L12.75 12L16.25 15.25" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>

                    <span>Back</span>
                </a>
                <span class="-mt-3 mx-2 font-display text-xl">.</span>
                <span>{{ $post->published_date->format('Y-m-d') }}</span>
                <span class="-mt-3 mx-2 font-display text-xl">.</span>
                @if ($post->show_author)
                    <span>Written by {{ $post->display_name }}</span>
                @endif
            </p>

            <livewire:themes-like-button :post="$post" />
        </aside>


        <x-themes-footer />

    </article>
</x-themes-theme-layout>
