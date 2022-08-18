@extends('layouts.main')

@section('content')
<h1 class="text-center text-light mb-4">{{ $title }}</h1>
@foreach($categories as $category)

{{-- Create categories cards --}}
<div class="card mb-5 w-50 m-auto bg-warning">
    <div class="card-header">
        <h2 class="text-dark">{{ $category->name }}</h2>
    </div>
    <div class="card-header">
        <p class="text-dark">{{ $category->description }}</p>
    </div>
    <div class="card-footer">
        <a href="/categories/{{ $category->slug }}" class="btn btn-primary">View Category</a>
    </div>
</div>
@endforeach
@endsection