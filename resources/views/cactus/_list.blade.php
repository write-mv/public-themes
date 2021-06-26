@extends('themes::cactus._layout')
@section('content')
<section id="about">{{ $blog->description }}</section>

    <section id="writing">
        <span class="h1"><a href="{{route('domain.posts.index', $blog->name)}}">Writings</a></span>

        <span class="h2">Most recent</span>

        <ul class="post-list">
            @forelse ($posts as $post)
                <li class="post-item">
                    <div class="meta"><time itemprop="datePublished">{{ $post->published_date->format('Y-m-d') }}</time>
                    </div>
                    <span><a
                            href="{{ route('domain.posts.show', ['name' => $blog->name, 'post' => $post->slug]) }}">{{ $post->title }}</a></span>
                </li>

            @empty  

            <li class="post-item">
                <div class="meta">No publications found..</div>
            </li>

            @endforelse


        </ul>

    </section>
@endsection
