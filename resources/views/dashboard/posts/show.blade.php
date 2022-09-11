@extends('dashboard.layouts.main')

@section('content')
    <div class="container bg-dark">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <article class="container mb-5">
                    <h1 class="text-light text-center m-5 d-block w-75 m-auto">{{ $post->title }}</h1>
                    <img src="http://source.unsplash.com/1200x400/?{{ $post->category->slug }}" class="card-img-top p-3 rounded"
                         alt="{{ $post->category->name }}">
                    <p class="text-light">{!! $post->content !!}</p>
                </article>
            <main />
        <div/>
    </div>
@endsection
