@extends('layouts.main')

@section('title', 'Register')

@section('content')


<div class="row justify-content-center mb-5">
    <div class="col-lg-6">
        <main class="form-signin m-auto">
            <form class="d-flex flex-column" action="/register" method="POST">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <img class="m-auto" src="img/logo-nevtik.png" alt="Logo NEVTIK" width="200">
                <h1 class="h3 mb-3 fw-normal text-white">Sign Up Page</h1>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        value="{{ old('name') }}" placeholder="Your Name" required>
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        name="username" value="{{ old('username') }}" placeholder="Username" required>
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="floatingInput" value="{{ old('email') }}" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="floatingPassword" value="{{ old('password') }}" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="checkbox mb-3">
                    <label class="text-white">
                        <input type="checkbox" value="remember-me" name="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <small><a href="/login">Have an account?</a></small>
            </form>
        </main>
    </div>
</div>

@endsection