<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Buat Tugas Baru</div>
                    <div class="card-body">
                        {{-- <form action="/tugas" method="POST" class="d-flex"> --}}
                        <form action="{{ route('tugas.store') }}" method="POST" class="d-flex">
                    
                            @csrf
                    
                            <input type="text" name="list" class="form-control me-2" placeholder="masukan nama tugas">
                    
                            <button class="btn btn-warning" type="submit">Tambah</button>
                    
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    @foreach($tugass as $index => $tugas)
                        {{-- <li>{{ $index + 1 }} - {{ $tugas->list }}</li> --}}
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            {{ $index + 1 }} - {{ $tugas->list }}
                            <div class="d-flex">
                                {{-- <a class="btn btn-primary me-2" href="/tugas/{{ $tugas->id }}/edit">Edit</a> --}}
                                <a class="btn btn-primary me-2" href="{{ route ('tugas.edit', $tugas->id) }}">Edit</a>
                                {{-- <form action="/tugas/{{ $tugas->id }}" method="POST"> --}}
                                <form action="{{ route('tugas.destroy', $tugas->id) }}" method="POST">
            
                                    @csrf
            
                                    @method('delete')
            
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                    
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


</x-app-layout>