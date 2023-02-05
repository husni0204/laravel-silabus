<x-app-layout>

    <p style="margin-bottom: 15px">Halaman Tugas</p>

    <form action="/tugas" method="POST">

        @csrf

        <input type="text" name="list" placeholder="masukan nama tugas">

        <button type="submit">Tambah</button>

    </form>

    <ul style="list-style-type: none">
        @foreach($tugass as $index => $tugas)
            {{-- <li>{{ $index + 1 }} - {{ $tugas->list }}</li> --}}
            <li>{{ $index + 1 }} - {{ $tugas->list }} - <a style="color: red" href="/tugas/{{ $tugas->id }}/edit">Edit</a></li>
        @endforeach
    </ul>

</x-app-layout>