@extends('layouts.main')

@section('content')
<article class="container mb-5">
    <h1 class="text-light text-center m-5 d-block w-75 m-auto">{{ $post->title }}</h1>
    <h4 class="text-secondary mb-4">By : <a class="text-decoration-none"
            href="/authors/{{ $post->author->username }}">{{
            $post->author->name }}</a></h4>

    <h5 class="text-white">Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </h5>

    <p class="text-light">{!! $post->content !!}</p>
    <a href="/posts" class="btn btn-danger mt-1">Back to Blog</a>
</article>
@endsection