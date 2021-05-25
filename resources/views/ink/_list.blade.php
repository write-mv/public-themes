@extends("themes::ink._layout")
@section('content')

    <div class="recent-posts section">
        <div class="posts">


            @forelse ($posts as $post)
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

            @empty
                <div class="meta">No publications found..</div>

            @endforelse


        </div>
    </div>
@endsection
