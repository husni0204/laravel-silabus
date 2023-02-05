@extends('layouts.app', ['title' => 'Contact'])

@section('content')

    @component('components.alert')

        @slot('title')
            Header component with <strong>strong</strong> Tag.
        @endslot
        ini adalah children

        @slot('footer')
            ini adalah Footer
        @endslot

    @endcomponent

    <p>adalah <strong style="color: red">Halaman About</strong></p>

@endsection