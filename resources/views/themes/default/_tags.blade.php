<x-themes-theme-layout>
    <article class="max-w-4xl mx-auto px-6 pt-24 pb-16">

        <header class="text-ink">
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
            <h1 class="mb-8 max-w-2xl font-display font-bold text-[2.5rem] lg:text-[5rem] leading-none text-ink">Tags
            </h1>
            <div class="flex flex-wrap -mx-2">

                @foreach ($tags->keys() as $letter)
                    <a href="#tag-group-{{ strtoupper($letter) }}"
                        class="inline-flex items-center justify-center w-8 h-8 m-2 font-semibold text-gray-500 border border-gray-200 rounded-lg hover:bg-gray-100">
                        {{ strtoupper($letter) }} </a>
                @endforeach
            </div>
            @foreach ($tags as $letter => $tagsCollection)
                <div>
                    <div id="tag-group-{{ strtoupper($letter) }}" class="flex items-center my-4"><span
                            class="flex items-center justify-center flex-shrink-0 h-8 font-semibold text-gray-500 rounded-lg">{{ strtoupper($letter) }}</span>
                        <hr class="w-full h-px max-w-sm ml-3 border-gray-100">
                    </div>
                    <div class="flex flex-wrap items-center -mx-2">
                        @foreach ($tagsCollection as $tag)
                            <a href="{{ route('domain.tags.show', [
                                'name' => $blog->name,
                                'tag' => $tag->slug,
                            ]) }}"
                                class="px-3 py-2 m-2 font-medium transition-all duration-200 border-2 border-sunsetdark rounded-lg text-sunsetdark hover:bg-yellow-50">{{ $tag->name }}</a>
                        @endforeach

                    </div>
                </div>
            @endforeach

        </header>

        <x-themes-footer />

    </article>
</x-themes-theme-layout>
