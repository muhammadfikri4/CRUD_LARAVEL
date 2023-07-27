@extends('struktur.dashboard_struktur')
@section('content')
    <form action="{{ route('action-tambahAnggota') }}" method="POST" class="mx-3" style="margin-top: 70px">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                id="exampleFormControlInput1" placeholder="Nama">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">NIM</label>
            <input type="number" name="nim" class="form-control @error('nim') is-invalid @enderror"
                id="exampleFormControlInput2" maxlength="10" placeholder="NIM">
            @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput3">Nomor Handphone</label>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping">+62</span>
                <input type="number" class="form-control" placeholder="Nomor Telepon" aria-label="no_hp"
                    aria-describedby="addon-wrapping" id="exampleFormControlInput3" name="no_hp">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="exampleFormControlInput2" placeholder="Email">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>





        <div class="mb-3">
            <label>Angkatan</label>
            <select class="form-select @error('id_angkatan') is-invalid @enderror" aria-label="Default select example"
                name="id_angkatan">
                @foreach ($angkatans as $angkatan)
                    <option value="{{ $angkatan->id }}">{{ $angkatan->angkatan }}</option>
                @endforeach

            </select>
        </div>

        <button class="btn btn-primary fw-bold" type="submit">Tambah</button>
        <button class="btn btn-warning fw-bold text-light" type="reset">Reset</button>
    </form>
@endsection
