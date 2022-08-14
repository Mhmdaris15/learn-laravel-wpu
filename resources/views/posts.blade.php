@extends('layouts.main')

@section('content')
<h1 class="text-light m-5 d-block">Blog Page</h1>
<div class="container">
    {{-- @dd($posts) --}}
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->excerpt}} ............</p>
                    {{-- <a href="{{ url('/posts/'.$post->id) }}" class="btn btn-primary">Read More</a> --}}
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection