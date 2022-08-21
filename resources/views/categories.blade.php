@extends('layouts.main')

@section('content')
<h1 class="text-center text-light mb-4">{{ $title }}</h1>

@foreach($categories as $category)

{{-- Create categories cards --}}
<div class="card mb-5 w-50 m-auto bg-warning">
    <div class="card-header">
        <h2 class="text-dark">{{ $category->name }}</h2>
    </div>
    <div class="card bg-dark text-white p-0">
        <img src="http://source.unsplash.com/1200x400/?{{ $category->slug }}" class="card-img" alt="...">
        <div class="card-img-overlay d-flex justify-content-center align-items-center">
            <p class="card-text p-3" style="background-color: rgba(0, 0,0, 0.5)">{{ $category->description }}</p>
        </div>
    </div>
    <div class="card-footer">
        <a href="/categories/{{ $category->slug }}" class="btn btn-primary">View Category</a>
    </div>
</div>
@endforeach
@endsection