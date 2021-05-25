@extends("themes::ink._layout")
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
