@extends('themes::themes.default._layout')
@section('content')
<article class="container px-4 py-24 mx-auto" itemid="#" itemscope itemtype="http://schema.org/BlogPosting">
  <div class="w-full mx-auto mb-12 text-center md:w-2/3">

    @if($page->is_english)
    <h1 class="mb-3 text-4xl font-bold text-gray-800 md:leading-tight md:text-5xl" style="font-family: Poppins;">
      {{$page->title}}
    </h1>
    @else
    <h1 class="mb-3 text-3xl text-gray-800 md:leading-tight md:text-5xl aammu" dir="rtl">
      {{$page->title}}
    </h1>
    @endif

    <p class="text-gray-700">

      @if($page->is_english)
      <time itemprop="datePublished dateModified" datetime="{{$page->published_date->format('F d, Y')}}"
        pubdate>{{$page->published_date->format('F d, Y')}}</time>

      @else
      <time itemprop="datePublished dateModified" class="faseyha" dir="rtl">
        {{$page->published_date->locale('dv')->isoFormat('Do MMMM YYYY')}}
      </time>
      @endif
    </p>
  </div>

  @if($page->is_english)
  <div class="mx-auto prose" style="font-family: Poppins;">
    {!! $page->getRenderedHtmlContent() !!}
  </div>
  @else

  <div class="mx-auto prose" style="font-family: typer;" dir="rtl">
    {!! $page->getRenderedHtmlContent() !!}
  </div>
  @endif
</article>
@endsection