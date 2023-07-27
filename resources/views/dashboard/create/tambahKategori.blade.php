@extends('struktur.dashboard_struktur')
@section('content')
    <form action="{{ route('action-tambahKategori') }}" method="POST" class="mx-2" style="margin-top: 70px">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
            <input name="name_kategori" type="text" class="form-control @error('name_kategori') is-invalid @enderror"
                id="exampleFormControlInput1" placeholder="Nama kategori">
            @error('name_kategori')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button class="btn btn-primary fw-bold" type="submit">Tambah</button>
        <button class="btn btn-warning fw-bold text-light" type="reset">Reset</button>
    </form>
@endsection
