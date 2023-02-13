{{-- {{ print_r($errors->all()) }} --}}
<div class="card">
    <div class="card-header">Buat Tugas Baru</div>
    <div class="card-body">
        {{-- <form action="/tugas" method="POST" class="d-flex"> --}}
        <form action="{{ route('tugas.store') }}" method="POST" class="d-flex">

            @csrf

            @include('tugass._form')
            
            {{-- @include('tugass._form', [
                'submit' => 'Create'
            ]) --}}

            {{-- <input type="text" name="list" class="form-control me-2" placeholder="masukan nama tugas">

            <button class="btn btn-warning" type="submit">Tambah</button> --}}

        </form>
        @error('list')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>