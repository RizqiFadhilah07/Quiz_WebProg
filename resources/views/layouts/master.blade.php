<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('style.css') }}"> --}}
    <title>@yield('title')</title>
    @include('layouts.bootstrap')
</head>
<body>
    @include('layouts.header')

        @yield('content')

    @include('layouts.footer')


    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
