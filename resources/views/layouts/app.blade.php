<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Husni | {{ $title }}</title>
    <link rel="stylesheet" href="/css/app.css">
    {{-- @yield('styles') --}}
    {{ $styles }}
    
</head>
<body>
    {{-- @include('layouts.navbar') --}}

    {{-- <p>Ini Home nama aplikasinya adalah : {{ $appName }}</p> --}}

    <x-navbar></x-navbar>

    {{-- @yield('content') --}}

    {{ $slot }}
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>