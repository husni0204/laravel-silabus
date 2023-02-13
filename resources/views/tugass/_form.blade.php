<div class="d-flex">

    {{-- <input class="form-control me-2" type="text" name="list" value="{{ $tugas->list }}" placeholder="masukan nama tugas"> --}}
    {{-- <input class="form-control me-2" type="text" name="list" value="{{ old('list') ?? $tugas->list }}" placeholder="masukan nama tugas"> --}}
    <input class="form-control me-2" type="text" name="list" value="{{ old('list', $tugas->list) }}" placeholder="masukan nama tugas">

    <button class="btn btn-success" type="submit">{{ $submit }}</button>

</div>