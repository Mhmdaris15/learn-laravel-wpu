@extends('dashboard.layouts.main')

@section('content')
    <div class="container bg-dark">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <article class="container mb-5">
                    <h1 class="text-light text-center m-5 d-block w-75 m-auto">{{ $post->title }}</h1>
                    <a href="/dashboard/posts" class="btn btn-success"><i data-feather="arrow-left"></i> Back to Posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i data-feather="edit"></i> Edit Post</a>
                    <form class="d-inline-block" action="/dashboard/posts/{{ $post->slug }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Delete this post?')"><i data-feather="trash-2"></i> Delete Post </button>
                    </form>

                    @if($post->image != null)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}">
                    @else
                        <img src="http://source.unsplash.com/1200x400/?{{ $post->category->slug }}" class="card-img-top p-3 rounded"
                             alt="{{ $post->category->name }}">
                    @endif
                    <p class="text-light">{!! $post->content !!}</p>
                </article>
            <main />
        <div/>
    </div>
@endsection
