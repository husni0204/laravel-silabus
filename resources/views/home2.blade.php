<x-app-layout>
    {{-- @section('styles')
        <style>
            body {
                background-color: indigo;
            }
        </style>
    @endsection --}}

    @slot('styles')
        <style>
            body {
                background-color: indigo;
            }
        </style>
    @endslot

    <p>Ini Home Page</p>
</x-app-layout>