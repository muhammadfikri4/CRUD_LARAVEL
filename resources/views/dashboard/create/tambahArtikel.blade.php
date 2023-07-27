@extends('struktur.dashboard_struktur')
@section('content')
    <form action="{{ route('action-tambahArtikel') }}" method="POST" enctype="multipart/form-data" class="mx-3"
        style="margin-top: 70px">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                id="exampleFormControlInput1" placeholder="Title/Judul">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <img id="previewImg" width="100px">
            <input class="form-control @error('image') is-invalid @enderror" id="image" type="file" id="formFile"
                name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <select class="form-select @error('id_kategori') is-invalid @enderror" aria-label="Default select example"
                name="id_kategori">
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->name_kategori }}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1"
                class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" row="10" style="resize: none"></textarea>
            @error('deskripsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary fw-bold" type="submit">Tambah</button>
        <button class="btn btn-warning fw-bold text-light" type="reset">Reset</button>
    </form>
@endsection
