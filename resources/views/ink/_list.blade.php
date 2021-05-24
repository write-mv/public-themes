@extends("themes::ink._layout")

@section('meta')
    <meta name="title" content="{{ $blog->site_title }}">
    <meta name="description" content="{{ $blog->description ?? '' }}">
    <meta property="og:url" content="https://write.mv">
    <meta property="og:type" content="website">
    <meta property="og:description" content="{{ $blog->description ?? '' }}">
    <meta property="og:title" content="{{ $blog->site_title }} - Write.mv">
    <meta property="og:image" content="https://write.mv/images/opengraph.png">
    <meta property="og:site_name" content="Write.mv">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->site_title }} - Write.mv">
    <meta name="twitter:image" content="https://write.mv/images/opengraph.png">
    <meta name="twitter:description" content="{{ $blog->description ?? '' }}">
    <title>{{ $blog->site_title }} - Write.mv</title>
@endsection

@section('content')

    <div class="recent-posts section">
        <div class="posts">


            @foreach ($posts as $post)
                <div class="post">
                    <div class="post-header">
                        <div class="meta">
                            <div class="date">
                                <span class="day">{{ $post->published_date->format('d') }}</span>
                                <span class="rest">{{ $post->published_date->format('M Y') }}</span>
                            </div>
                        </div>
                        <div class="matter">
                            <h4 class="title small">
                                <a
                                    href="{{ route('posts.show', ['name' => $blog->name, 'post' => $post->slug]) }}">{{ $post->title }}</a>
                            </h4>
                            <span class="description">

                                {{ $post->excerpt }}

                            </span>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
