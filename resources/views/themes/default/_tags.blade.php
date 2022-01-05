@extends('themes::themes.default._layout')
@section('content')
    <div class="container mx-auto">
        <div class="p-6 mt-6">
            <h2 class="text-2xl font-bold text-gray-600">
                Tags
            </h2>
            <div class="flex flex-wrap -mx-2">

                @foreach ($tags->keys() as $letter)
                    <a href="#tag-group-{{ strtoupper($letter) }}"
                        class="inline-flex items-center justify-center w-8 h-8 m-2 font-semibold text-gray-500 border border-gray-200 rounded-lg hover:bg-gray-100">
                        {{ strtoupper($letter) }} </a>
                @endforeach
            </div>
            @foreach ($tags as $letter => $tagsCollection)
                <div>
                    <div id="tag-group-{{ strtoupper($letter) }}" class="flex items-center my-4"><span
                            class="flex items-center justify-center flex-shrink-0 h-8 font-semibold text-gray-500 rounded-lg">{{ strtoupper($letter) }}</span>
                        <hr class="w-full h-px max-w-sm ml-3 border-gray-100">
                    </div>
                    <div class="flex flex-wrap items-center -mx-2">
                        @foreach ($tagsCollection as $tag)
                            <a href="{{ route('domain.tags.show', [
    'name' => $blog->name,
    'tag' => $tag->slug,
]) }}"
                                class="px-3 py-2 m-2 font-medium transition-all duration-200 border-2 border-blue-500 rounded-lg text-blue-500 hover:bg-blue-200">{{ $tag->name }}</a>
                        @endforeach

                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
