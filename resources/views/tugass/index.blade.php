<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @include('tugass._create')
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