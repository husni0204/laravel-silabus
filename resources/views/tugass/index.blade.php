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
            <li style="margin-bottom: 15px">
                {{ $index + 1 }} - {{ $tugas->list }}
                <div>
                    <a style="color: skyblue" href="/tugas/{{ $tugas->id }}/edit">Edit</a>
                    <form action="/tugas/{{ $tugas->id }}" method="POST" style="display: inline">

                        @csrf

                        @method('delete')

                        <button type="submit">Hapus</button>
                        
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</x-app-layout>