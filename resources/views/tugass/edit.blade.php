<x-app-layout>

    <p style="margin-bottom: 15px">Halaman Edit Tugas</p>

    <form action="/tugas/{{ $tugass->id }}" method="POST">

        @method('put')

        @csrf

        <input type="text" name="list" value="{{ $tugass->list }}" placeholder="masukan nama tugas">

        <button type="submit">Update</button>

    </form>

</x-app-layout>