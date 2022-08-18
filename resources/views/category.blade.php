@extends('layouts.main')

@section('content')

{{-- title --}}
<h1 class="text-light text-center m-5 my-4 d-block w-75 m-auto">{{ $title }}</h1>

{{-- create card posts --}}
@foreach($posts as $post)
<article class="container border-bottom p-2">
    <a class="text-decoration-none" href="/posts/{{ $post->slug }}">
        <h2 class="d-block m-auto">{{ $post->title }}</h2>
    </a>
    <h5 class="text-secondary">By : <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{
            $post->author->name }}</a></h5>
    <h5 class="text-white">Category : <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{
            $post->category->name }}</a>
    </h5>

    <p class="text-light">{!! $post->excerpt !!}</p>
    <p class="text-success">{{ $post->created_at->diffForHumans() }}</p>
    <a href="/posts/{{ $post->slug }}" class="btn btn-danger mt-1">View Post</a>
</article>
@endforeach

@endsection