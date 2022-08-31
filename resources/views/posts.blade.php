@extends('layouts.main')

@section('content')
<h1 class="text-light m-5 d-block text-center">{!! request('category') && $posts->count() ? 'Categorized by : ' .
    $posts[0]->category->name
    : 'All Blog Posts'
    !!}</h1>



<div class="container">
    <form class="input-group mb-3 w-50 m-auto">
        @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
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
    {{-- @dd($posts) --}}
    <div class="row d-flex gap-3 mb-4">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-3 flex-fill bg-warning rounded">
            <div class="card">
                <a href="/posts?category={{ $post->category->slug }}"
                    class="position-absolute bg-dark mt-2 py-2 px-2 fs-6 text-white text-decoration-none">
                    <small>{{ $post->category->name }}</small>
                </a>
            </div>
            <img src="http://source.unsplash.com/800x400/?{{ $post->category->slug }}" class="card-img-top rounded pt-2"
                alt="{{ $post->category->name }}">
            <div class="card bg-warning border-0">
                <div class="card-body">
                    <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">{{
                            $post->title }}</a></h5>
                    <h6>By <a class="text-decoration-none" href="authors/{{ $post->author->slug }}">{{
                            $post->author->name
                            }}</a> in <a class="text-decoration-none"
                            href="/posts?category={{ $post->category->slug }}">{{
                            $post->category->name }}</a>
                    </h6>
                    <small>
                        <p class="text-muted">Last updated {{
                            $post->created_at->diffForHumans()
                            }}</p>
                    </small>
                    <p class="card-text">{{ $post->excerpt}} </p>
                    {{-- <a href="{{ url('/posts/'.$post->id) }}" class="btn btn-primary">Read More</a> --}}
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $posts->links() }}
</div>
@else
<p class="text-center fs-2 text-white">No Post Found.</p>
@endif

@endsection