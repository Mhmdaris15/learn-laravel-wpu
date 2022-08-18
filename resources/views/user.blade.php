@extends('layouts.main')

@section('content')

{{-- create card profile --}}
<div class="card mb-5 w-50 m-auto bg-info">
    <div class="card-header">
        <h2 class="text-dark">{{ $author->name }}</h2>
    </div>
    <div class="card-body">
        <p class="card-text">{{ $author->username }}</p>
        <p class="card-text">{{ $author->email }}</p>
        <p class="card-text">{{ $author->created_at->diffForHumans() }}</p>
    </div>
    <div class="card-footer">
        <a href="/posts" class="btn btn-danger">View All Post</a>
    </div>
</div>

{{-- create card posts --}}

@foreach($posts as $post)
<article class="container border-bottom p-2">
    <a class="text-decoration-none" href="/posts/{{ $post->slug }}">
        <h2 class="d-block m-auto">{{ $post->title }}</h2>
    </a>
    <h5 class="text-white">Category : <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{
            $post->category->name }}</a>
    </h5>

    <p class="text-light">{!! $post->excerpt !!}</p>
    <p class="text-success">{{ $post->created_at->diffForHumans() }}</p>
    <a href="/posts/{{ $post->slug }}" class="btn btn-danger mt-1">View Post</a>
</article>

@endforeach

{{-- create card categories --}}


@endsection