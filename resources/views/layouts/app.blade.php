<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Husni | {{ $title }}</title>
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    @vite(['resources/sass/app.scss', 'resources/js/main.js'])
    {{-- @yield('styles') --}}
    {{ $styles }}
    
</head>
<body>
    {{-- @include('layouts.navbar') --}}

    {{-- <p>Ini Home nama aplikasinya adalah : {{ $appName }}</p> --}}

    <x-navbar></x-navbar>

    {{-- @yield('content') --}}

    <div class="pt-4">
        {{ $slot }}
    </div>
    
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
</body>
</html>