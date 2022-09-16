@extends('layouts.main')

@section('content')
<h1 class="text-light m-5 d-block">Home Page</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Welcome to ArisLaravel</h5>
                    <p class="card-text">This is a simple Laravel application that is created to learn Laravel
                        framework.</p>
                    <a href="{{ url('/about') }}" class="btn btn-primary">About</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
