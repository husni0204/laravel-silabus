{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $name }}</title>
</head>
<body>
    <p>Halaman Profile dari {{ $name }}</p>
    <p>Sama dengan penulisan nama <?php echo $name; ?> </p>  
</body>
</html> --}}
@extends('layouts.app', ['title' => 'Profile'])

@section('content')

    <p>adalah <strong style="color: red">Halaman Profile</strong></p>

    <x-app-layout></x-app-layout>
    
@endsection