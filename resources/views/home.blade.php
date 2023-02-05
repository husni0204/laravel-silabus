@extends('layouts.app', ['title' => 'Homepage'])

{{-- @section('title', 'Homepage') --}}

@section('content')

    <x-alert>

        <x-slot name="title">
            Header component with <strong>strong</strong> Tag.
        </x-slot>
        ini adalah children

        @slot('footer')
            ini adalah Footer
        @endslot

    </x-alert>

    <x-app-layout></x-app-layout>

    <p>adalah <strong style="color: red">Home</strong></p>

@endsection