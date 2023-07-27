@extends('struktur.dashboard_struktur')
@section('content')
    @foreach ($acara as $item)
        <form action="{{ route('action-updateAcara', $item->id) }}" method="POST" enctype="multipart/form-data" class="mx-3"
            style="margin-top: 70px">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="Title/Judul" value="{{ $item->title }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jadwal</label>
                <input type="date" name="jadwal" class="form-control @error('jadwal') is-invalid @enderror"
                    id="exampleFormControlInput1" value="{{ $item->jadwal }}">
                @error('jadwal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tempat</label>
                <input type="text" class="form-control @error('tempat') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="Tempat Acara" name="tempat" value="{{ $item->tempat }}">
                @error('tempat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input type="hidden" name="oldImg" value="{{ $item->image }}">
                @if ($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" id="previewImg" width="100px" alt="img"
                        class="d-block mb-3">
                @else
                    <img id="previewImg" width="100px">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
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
                        @if (old('name_kategori', $item->id_kategori === $kategori->id))
                            <option selected value="{{ $kategori->id }}" selected>{{ $kategori->name_kategori }}</option>
                        @else
                            <option value="{{ $kategori->id }}">{{ $kategori->name_kategori }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                    id="exampleFormControlTextarea1" row="10" style="resize: none">{{ $item->deskripsi }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <button class="btn btn-primary fw-bold" type="submit">Update</button>
            <button class="btn btn-warning fw-bold text-light" type="reset">Reset</button>
        </form>
    @endforeach
@endsection
