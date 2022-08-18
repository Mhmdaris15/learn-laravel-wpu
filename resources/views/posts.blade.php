@extends('layouts.main')

@section('content')
<h1 class="text-light m-5 d-block text-center">All Blog Posts</h1>
<div class="container">
    {{-- @dd($posts) --}}
    <div class="row d-flex gap-3">
        @foreach ($posts as $post)
        <div class="col-md-3 flex-fill bg-warning rounded">
            <div class="card bg-warning border-0">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <h6>By <a class="text-decoration-none" href="authors/{{ $post->author->slug }}">{{
                            $post->author->name
                            }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{
                            $post->category->name }}</a>
                    </h6>
                    <p class="card-text">{{ $post->excerpt}} </p>
                    {{-- <a href="{{ url('/posts/'.$post->id) }}" class="btn btn-primary">Read More</a> --}}
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection