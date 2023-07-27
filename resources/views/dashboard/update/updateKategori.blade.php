@extends('struktur.dashboard_struktur')
@section('content')
    @foreach ($kategori as $item)
        <form action="{{ route('action-updateKategori', $item->id) }}" method="POST" class="mx-3" style="margin-top: 70px">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                <input name="name_kategori" type="text" class="form-control @error('name_kategori') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="Nama Kategori" value="{{ $item->name_kategori }}">
                @error('name_kategori')
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
