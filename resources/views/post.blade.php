@extends('layouts.main')

@section('content')
<article class="container mb-5">
    <h1 class="text-light text-center m-5 d-block w-75 m-auto">{{ $post->title }}</h1>
    <h4 class="text-secondary mb-4">By : {{ $post->author }}</h4>
    <p class="text-light">{!! $post->content !!}</p>
    <a href="/posts" class="btn btn-danger mt-5">Back to Blog</a>
</article>
@endsection