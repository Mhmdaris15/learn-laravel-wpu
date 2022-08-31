@extends('layouts.main')

@section('content')

{{-- title --}}
<h1 class="text-light text-center m-5 my-4 d-block w-75 m-auto">{{ $title }}</h1>

{{-- create card posts --}}

<div class="container">
    <form class="input-group mb-3 w-50 m-auto">
        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
            aria-describedby="basic-addon2" name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
    </form>
    @if ($posts->count())
    <div class="card mb-3 bg-warning rounded">
        <img src="http://source.unsplash.com/1200x400/?{{ $posts[0]->category->slug }}" class="card-img-top p-3 rounded"
            alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{
                    $posts[0]->title }}</a></h3>
            <p class="d-inline">
                <small class="text-muted d-inline">
                    By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none d-inline">{{
                        $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}"
                        class="text-decoration-none d-inline">{{
                        $posts[0]->category->name }}</a>
                    <p class="text-muted">Last updated {{
                        $posts[0]->created_at->diffForHumans()
                        }}</p>
            </p>

            </small>

            <p class="card-text">{{ $posts[0]->excerpt }}</p>

            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>

        </div>
    </div>
    @else
    <p class="text-center fs-4">No Post Found.</p>
    @endif
    @foreach($posts as $post)
    <article class="container border-bottom p-2">
        <a class="text-decoration-none" href="/posts/{{ $post->slug }}">
            <h2 class="d-block m-auto">{{ $post->title }}</h2>
        </a>
        <h5 class="text-secondary">By : <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{
                $post->author->name }}</a></h5>
        <h5 class="text-white">Category : <a class="text-decoration-none"
                href="/posts?category={{ $post->category->slug }}">{{
                $post->category->name }}</a>
        </h5>

        <p class="text-light">{!! $post->excerpt !!}</p>
        <p class="text-success">{{ $post->created_at->diffForHumans() }}</p>
        <a href="/posts/{{ $post->slug }}" class="btn btn-danger mt-1">View Post</a>
    </article>
    @endforeach

    @endsection
</div>