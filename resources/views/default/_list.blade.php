@extends('themes::default._layout')
@section('content')
<section class="container w-full px-4 py-24 mx-auto md:w-3/4 lg:w-2/4">
    <div class="mb-12 text-center">
      <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900" style="font-family: Poppins;">
        {{$blog->site_title}}</h2>
      <p class="text-lg text-gray-500" style="font-family: Poppins;">{{$blog->description}}</p>
    </div>
    <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 2xl:pb-8 ml-2 pt-4 px-6">
  
      @forelse ($posts as $post)
  
      @if($post->is_english)
      <!-- start Card -->
      <a href="{{route('domain.posts.show', ['name' => $blog->name ,'post' => $post->slug])}}"
        class="lg:order-1 shadow-sm lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg  mb-5 lg:mb-0 border border-gray-400 hover:shadow-lg" style="background-color:#F9F4F0;">
        <div class="mx-6 my-8 mt-10">
          <h2 class="text-black text-opacity-50 text-md md:text-base 2xl:text-2xl 2xl:my-2 ml-1 sm:ml-5" style="font-family: Poppins;">
            Published {{$post->published_date->format('F d, Y')}}@if($post->show_author)<div>by {{$post->display_name}}
            </div>@endif
          </h2>
        </div>
        <div class="-mt-6 relative">
          <p class="text-black text-xl 2xl:text-3xl font-bold px-7 lg:px-9 2xl:pt-6 2xl:mx-2"
            style="font-family: Poppins;">
            {{$post->title}}
          </p>
          <br />
  
          <p class="text-black text-opacity-50 font-normal md:text-sm 2xl:text-2xl px-7 lg:px-9 mb-3 2xl:pb-8 2xl:mx-2"
            style="font-family: Poppins;">
            {{substr( $post->excerpt, 0, 150). " ... "}}
          </p>
  
        </div>
      </a>
      <!-- End card-->
      @else
  
      <!-- start Card -->
      <a href="{{route('domain.posts.show', ['name' => $blog->name ,'post' => $post->slug])}}"
        class="lg:order-1 shadow-sm lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg  mb-5 lg:mb-0 border border-gray-400 hover:shadow-lg" style="background-color:#F9F4F0;">
        <div class="mx-6 my-8 mt-10">
          <h2 class="text-black text-opacity-70 text-md 2xl:my-2 ml-1 sm:ml-5 typer"  dir="rtl">
            {{$post->published_date->locale('dv')->isoFormat('Do MMMM YYYY')}}
          </h2>
        </div>
        <div class="-mt-6 relative">
  
          <p class="text-black text-xl 2xl:text-3xl px-7 lg:px-9 2xl:pt-6 2xl:mx-2 aammu" dir="rtl">
            {{$post->title}}
          </p>
          <br />
  
          <p class="text-black text-opacity-70 font-normal text-sm  px-7 lg:px-9 mb-3 2xl:pb-8 2xl:mx-2 typer leading-7"
            dir="rtl">
            {{ $post->excerpt}}
          </p>
  
        </div>
      </a>
      <!-- End card-->
      @endif

      @empty

      <p class="text-center text-gray-500 text-md">No publications found...</p>
  
      @endforelse
  
  
      <div class="mt-12">
        {{$posts->links()}}
      </div>
  </section>
@endsection