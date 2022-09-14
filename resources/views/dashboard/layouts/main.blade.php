<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | {{ Auth::user()->name }} </title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/laravel-logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./bootstrap-5.0.2-dist/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script src="{{ asset('js/feather.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>

</head>

<body class="bg-dark">
    @include('dashboard.layouts.header')
    @include('dashboard.layouts.sidebar')
    @yield('content')

    <script src="{{ asset('js/jquery-3.6.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/Chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>

</body>

</html>
