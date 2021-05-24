@extends('themes::cactus._layout')

@section('meta')
    <meta name="title" content="{{ $blog->site_title }}">
    <meta name="description" content="{{ $blog->description ?? '' }}">
    <meta property="og:url" content="https://write.mv">
    <meta property="og:type" content="website">
    <meta property="og:description" content="{{ $blog->description ?? '' }}">
    <meta property="og:title" content="{{ $blog->site_title }} - Write.mv">
    <meta property="og:image" content="{{$blog->meta['og_image'] ?  url($blog->meta['og_image']) : "https://write.mv/images/opengraph.png"}}">
    <meta property="og:site_name" content="Write.mv">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->site_title }} - Write.mv">
    <meta name="twitter:image" content="https://write.mv/images/opengraph.png">
    <meta name="twitter:description" content="{{ $blog->description ?? '' }}">
    <title>{{ $blog->site_title }} - Write.mv</title>
@endsection

@section('content')
<section id="about">{{ $blog->description }}</section>

    <section id="writing">
        <span class="h1"><a href="https://themes.gohugo.io/theme/hugo-theme-cactus/posts">Writings</a></span>

        <span class="h2">Most recent</span>

        <ul class="post-list">
            @foreach ($posts as $post)
                <li class="post-item">
                    <div class="meta"><time itemprop="datePublished">{{ $post->published_date->format('Y-m-d') }}</time>
                    </div>
                    <span><a
                            href="{{ route('posts.show', ['name' => $blog->name, 'post' => $post->slug]) }}">{{ $post->title }}</a></span>
                </li>

            @endforeach


        </ul>

    </section>
@endsection
