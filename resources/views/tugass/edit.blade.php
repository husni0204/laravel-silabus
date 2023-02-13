<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-header">Buat Tugas Baru</div>
                <div class="card-body">
                    {{-- <form action="/tugas/{{ $tugass->id }}" method="POST" class="d-flex"> --}}
                    <form action="{{ route('tugas.update', $tugas->id) }}" method="POST" class="d-flex">
                
                        @method('put')
                
                        @csrf
                
                        @include('tugass._form')

                    </form>
                    @error('list')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    {{-- <p style="margin-bottom: 15px">Halaman Edit Tugas</p> --}}


</x-app-layout>