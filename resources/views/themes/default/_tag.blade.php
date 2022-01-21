<x-themes-theme-layout>

    <article class="max-w-4xl mx-auto px-6 pt-24 pb-16">

        <header>
            <h1 class="mb-8 max-w-2xl font-display font-bold text-[2.5rem] lg:text-[5rem] leading-none text-ink">Tag:
                {{ $tag->name }}</h1>
        </header>

        <main class="text-ink">
            <section class="max-w-2xl mx-auto my-16">
                <h2 class="max-w-2xl mx-auto flex items-center text-sm uppercase tracking-wider font-medium">
                    <span>Publications</span>
                    <span class="-mt-3 mx-2 font-display text-xl">.</span>
                    <span>Written by {{ $blog->name }}</span>
                </h2>

                <ul class="mt-8 space-y-2">
                    @foreach ($posts as $post)

                        @if ($post->is_english)
                            <li>
                                <a href="{{ route('domain.posts.show', ['name' => $blog->name, 'post' => $post->slug]) }}"
                                    class="toc-entry">
                                    <h3 class="toc-chapter text-xl font-display font-medium">{{ $post->title }}</h3>
                                    <span class="toc-page">{{ $post->published_date->format('Y-m-d') }}</span>
                                </a>
                            </li>

                        @else

                            <li>
                                <a href="{{ route('domain.posts.show', ['name' => $blog->name, 'post' => $post->slug]) }}"
                                    class="toc-entry">
                                    <h3 class="toc-chapter text-xl font-medium text-right aammu" dir="rtl">
                                        {{ $post->title }}
                                    </h3>
                                    <span class="">{{ $post->published_date->format('Y-m-d') }}</span>
                                </a>
                            </li>

                        @endif
                    @endforeach
                </ul>
            </section>
        </main>

    </article>
</x-themes-theme-layout>
