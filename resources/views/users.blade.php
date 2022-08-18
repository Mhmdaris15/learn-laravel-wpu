@extends('layouts.main')

@section('content')

@foreach ($authors as $author)
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
        <a href="/authors/{{ $author->username }}" class="btn btn-danger">View Profile</a>
    </div>
</div>
@endforeach


@endsection