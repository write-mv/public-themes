@extends('themes::harbor._layout')
@section('content')
    <div class="post-heading">

        <h1>
            {{ $post->title }}
        </h1>


        <span class="meta-post">
            <em class="fa fa-calendar-alt"></em>&nbsp;{{ $post->published_date->format('M d, Y') }}


        </span>


    </div>
    </div>
    </div>
    </header>

    <div class="container" role="main">
        <article class="article" class="blog-post">

            {!! $post->getRenderedHtmlContent() !!}

        </article>
    </div>

@endsection