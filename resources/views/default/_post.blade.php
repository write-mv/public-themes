@extends('themes::default._layout')
@section('content')
    <article class="container px-4 py-24 mx-auto" itemid="#" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="w-full mx-auto mb-12 text-center md:w-2/3">

            @if ($post->is_english)
                <h1 class="mb-3 text-4xl font-bold text-gray-800 md:leading-tight md:text-5xl" style="font-family: Poppins;">
                    {{ $post->title }}
                </h1>
            @else
                <h1 class="mb-3 text-3xl text-gray-800 md:leading-tight md:text-5xl aammu" dir="rtl">
                    {{ $post->title }}
                </h1>
            @endif

            <p class="text-gray-700">
                @if ($post->show_author)
                    <div>
                        Written by
                        <span class="byline author vcard" itemprop="author" itemscope="itemscope"
                            itemtype="http://schema.org/Person">
                            <a target="_blank" itemprop="url" rel="author noopener noreferrer"
                                class="text-gray-900 hover:text-primary-dark"><span
                                    itemprop="name">{{ $post->display_name }}</span></a>
                        </span>
                    </div>
                @endif

                @if ($post->is_english)
                    <time itemprop="datePublished dateModified" datetime="{{ $post->published_date->format('F d, Y') }}"
                        pubdate>{{ $post->published_date->format('F d, Y') }}</time>

                @else
                    <time itemprop="datePublished dateModified" class="faseyha" dir="rtl">
                        {{ $post->published_date->locale('dv')->isoFormat('Do MMMM YYYY') }}
                    </time>
                @endif
            <div class="flex items-center text-gray-500 mt-5">
                @foreach ($post->tags as $tag)
                    <a href="{{ route('domain.tags.show', [
    'name' => $blog->name,
    'tag' => $tag->slug,
]) }}"
                        class="text-xs font-light hover:underline cursor-pointer @if (!$loop->first) ml-2 @endif">
                        #{{ $tag->name }}</a>
                @endforeach

            </div>
            </p>
        </div>

        @if ($post->featured_image)
            <div class="flex flex-col items-center justify-center">
                <img class="object-cover lg:w-1/2 lg:h-1/2 mb-5 bg-center rounded" src="{{ $post->featuredImageUrl() }}"
                    alt="Featured Image">
                <p class="text-base text-gray-500 mt-1 mb-3">{{ $post->featured_image_caption }}</p>
            </div>
        @endif

        @if ($post->is_english)
            <div class="mx-auto prose" style="font-family: Poppins;">
                {!! $post->getRenderedHtmlContent() !!}
            </div>
        @else

            <div class="mx-auto prose" style="font-family: typer;" dir="rtl">
                {!! $post->getRenderedHtmlContent() !!}
            </div>
        @endif
    </article>
@endsection
