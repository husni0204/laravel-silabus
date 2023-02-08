<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-header">Buat Tugas Baru</div>
                <div class="card-body">
                    <form action="/tugas/{{ $tugass->id }}" method="POST" class="d-flex">
                
                        @method('put')
                
                        @csrf
                
                        <input class="form-control me-2" type="text" name="list" value="{{ $tugass->list }}" placeholder="masukan nama tugas">
                
                        <button class="btn btn-success" type="submit">Update</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <p style="margin-bottom: 15px">Halaman Edit Tugas</p> --}}


</x-app-layout>