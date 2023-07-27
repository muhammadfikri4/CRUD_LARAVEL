@extends('struktur.dashboard_struktur')
@section('content')
    {{-- <p class="navbar-brand" style="font-size: 24px; margin-top: 70px">Tambah Acara</p> --}}
    <form action="{{ route('action-tambahSharing') }}" method="POST" enctype="multipart/form-data" class="mx-3"
        style="margin-top: 70px">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                id="exampleFormControlInput1" placeholder="Title/Judul" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jadwal</label>
            <input type="date" data-date-format="DD MM YYYY" name="jadwal_sharing"
                class="form-control @error('jadwal_sharing') is-invalid @enderror" id="exampleFormControlInput1">
            @error('jadwal_sharing')
                <div class="invalid-feedback" value="{{ old('jadwal_sharing') }}">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <img id="previewImg" width="100px">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <select class="form-select @error('id_kategori') is-invalid @enderror" name="id_kategori"
                value="{{ old('id_kategori') }}">
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->name_kategori }}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1"
                class="form-label @error('deskripsi') is-invalid @enderror">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" row="10" style="resize: none">{{ old('deskripsi') }}</textarea>
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
