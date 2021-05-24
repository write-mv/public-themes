@extends("themes::ink._layout")

@section('meta')
<meta data-rh="true" property="al:android:app_name" content="Medium" />
<meta property="article:published_time" content="{{$post->published_date}}"/>
<meta name="title" content="{{$post->meta['title'] ?? ""}}">
<meta name="description" content="{{$post->meta['description'] ?? ""}}">
<meta property="og:url" content="{{route('posts.show', ['name' => $blog->name ,'post' => $post->slug])}}">
<meta property="og:type" content="website">
<meta property="og:description" content="{{$post->meta['description'] ?? ""}}">
<meta property="og:title" content="{{$post->meta['title'] ?? ""}} - Write.mv">
<meta property="og:image" content="{{$post->featuredImageUrl() ?? ""}}">
<meta property="og:site_name" content="Write.mv">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{$post->meta['title'] ?? ""}} - Write.mv">
<meta name="twitter:image" content="{{$post->featuredImageUrl() ?? ""}}">
<meta name="twitter:description" content="{{$post->meta['description'] ?? ""}}">

<title>{{isset($post->meta['title']) ? $post->meta['title'] : $post->title}} - Write.mv</title>
@endsection


@section('content')


    <div class="post">
        <div class="post-header">

            <div class="meta">
                <div class="date">
                    <span class="day">{{ $post->published_date->format('d') }}</span>
                    <span class="rest">{{ $post->published_date->format('M Y') }}</span>
                </div>
            </div>

            <div class="matter">
                <h1 class="title">{{ $post->title }}</h1>
            </div>
        </div>

        <div class="markdown">
           
            {!! $post->getRenderedHtmlContent() !!}
        </div>
    </div>
    </div>

@endsection
