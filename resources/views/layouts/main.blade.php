<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Str::substr($title, 0, 20) }} | ArisLaravel</title>
    <link rel="shortcut icon" href="{{ asset('img/laravel-logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="bg-dark">
    @include('partials.navbar')
    @yield('content')
    <script src="{{ asset('js/jquery-3.6.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
</body>

</html>
