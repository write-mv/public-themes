@extends('themes::cactus._layout') 

@section('content')
<article class="post" itemscope itemtype="http://schema.org/BlogPosting">

    <h1>{{ $post->title }}</h1>

  <div class="content" itemprop="articleBody">
    {!! $post->getRenderedHtmlContent() !!}
  
  </div>
</article>

@endsection