@extends('layouts.main')

@section('title', 'Login')

@section('content')


<div class="row justify-content-center">
    <div class="col-lg-6">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Succeed!</strong> {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('loginError') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <main class="form-signin m-auto">
            <form class="d-flex flex-column" action="/login" method="POST">
                @csrf
                <img class="mb-4 m-auto" src="img/logo-nevtik.png" alt="Logo NEVTIK" width="200">
                <h1 class="h3 mb-3 fw-normal text-white">Please sign in</h1>

                <div class="form-floating mb-2">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="name@example.com" name="email" autofocus value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" placeholder="Password" value="{{ old('password') }}">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="checkbox mb-3">
                    <label class="text-white">
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <small><a href="/register">Haven't registered yet?</a></small>
            </form>
        </main>
    </div>
</div>


@endsection