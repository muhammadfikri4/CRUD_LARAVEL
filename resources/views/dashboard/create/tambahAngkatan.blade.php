@extends('struktur.dashboard_struktur')
@section('content')
    {{-- <p class="navbar-brand" style="font-size: 24px; margin-top: 70px">Tambah Acara</p> --}}
    <form action="{{ route('action-tambahAngkatan') }}" method="POST" class="mx-3" style="margin-top: 70px">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tahun Angkatan</label>
            <input name="angkatan" type="number" class="form-control @error('angkatan') is-invalid @enderror"
                id="exampleFormControlInput1" placeholder="Tahun Angkatan" autofocus>
            @error('angkatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary fw-bold" type="submit">Tambah</button>
        <button class="btn btn-warning fw-bold text-light" type="reset">Reset</button>
    </form>
@endsection
