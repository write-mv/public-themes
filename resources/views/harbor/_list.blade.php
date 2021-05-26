@extends('themes::harbor._layout')
@section('content')
    <div class="posts-list">
        @forelse ($posts as $post)
            <article class="post-preview">
                <a href="{{ route('posts.show', ['name' => $blog->name, 'post' => $post->slug]) }}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                </a>
                <div class="post-entry">

                    <p>
                    <p>
                        {{ $post->excerpt }}
                    </p>
                    </p>
                    <a href="{{ route('posts.show', ['name' => $blog->name, 'post' => $post->slug]) }}"
                        class="post-read-more">Read
                        More</a>

                </div>

                <div class="postmeta">
                    <span class="meta-post">
                        <em class="fa fa-calendar-alt"></em>&nbsp;{{$post->published_date->format('M d, Y')}}
                    </span>

                </div>
            </article>
        @empty

        @endforelse




    </div>

    <ul class="pager">


        <li class="next">

            <a href="https://themes.gohugo.io//theme/harbor/page/2/">Older &rarr;</a>

        </li>

    </ul>
@endsection
