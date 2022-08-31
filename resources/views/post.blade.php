@extends('layouts.main')

@section('content')
<article class="container mb-5">
    <h1 class="text-light text-center m-5 d-block w-75 m-auto">{{ $post->title }}</h1>
    <img src="http://source.unsplash.com/1200x400/?{{ $post->category->slug }}" class="card-img-top p-3 rounded"
        alt="{{ $post->category->name }}">
    <small class="fs-6">
        <h4 class="text-secondary">By : <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{
                $post->author->name }}</a></h4>

    </small>
    <small class="fs-6 text-secondary">
        Category : <a class="text-decoration-none text-secondary" href="/posts?category={{ $post->category->slug }}">{{
            $post->category->name
            }}</a>
    </small>

    <p class="text-light">{!! $post->content !!}</p>
    <a href="/posts" class="btn btn-danger mt-1">Back to Blog</a>
</article>
@endsection