@extends('layouts.main');

@section('content')
<h1 class="text-light m-5 d-block">About Page</h1>
{{-- introduce myself --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <img class="img-thumbnail rounded-circle" src="img/{{ $image }}" alt="{{ $name }}" width="200">
                    <h5 class="card-title">My Name is {{ $name }}</h5>
                    <p class="card-text">I am a student of University of Indonesia, currently studying in
                        Information Technology. I am a full-stack developer who is interested in web development.
                        I am a self-taught programmer and I am always learning new things. I am a hard-working
                        individual who is always willing to learn new things.
                        {{-- show my social media --}}
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="text-warning" href="" target="_blank">
                                <i class="fab fa-facebook-square"></i>
                                Muhammad Aris Septanugroho
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-warning" href="" target="_blank">
                                <i class="fab fa-twitter-square"></i>
                                @mhmdaris15
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-warning" href="" target="_blank">
                                <i class="fab fa-instagram"></i>
                                @mhmdaris15
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-warning" href="" target="_blank">
                                <i class="fab fa-github-square"></i>
                                @Mhmdaris15
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a class="text-warning" href="" target="_blank">
                                <i class="fab fa-email"></i>
                                {{ $email }}
                            </a>
                        </li>
                        </p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection