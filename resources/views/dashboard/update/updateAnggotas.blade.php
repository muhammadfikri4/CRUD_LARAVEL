@extends('struktur.dashboard_struktur')
@section('content')
    @foreach ($anggota as $item)
        <form action="{{ route('action-updateAnggota', $item->id) }}" method="POST" enctype="multipart/form-data"
            class="mx-3" style="margin-top: 70px">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="Nama" value="{{ $item->nama }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">NIM</label>
                <input type="number" name="nim" class="form-control @error('nim') is-invalid @enderror"
                    id="exampleFormControlInput2" maxlength="10" placeholder="NIM" value="{{ $item->nim }}">
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
                        aria-describedby="addon-wrapping" id="exampleFormControlInput3" name="no_hp"
                        value="{{ $item->no_hp }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="exampleFormControlInput2" placeholder="Email" value="{{ $item->email }}">
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
                        @if (old('name_kategori', $item->id_angkatan === $angkatan->id))
                            <option value="{{ $angkatan->id }}" selected>{{ $angkatan->angkatan }}</option>
                        @else
                            <option value="{{ $angkatan->id }}">{{ $angkatan->angkatan }}</option>
                        @endif
                    @endforeach

                </select>
            </div>

            <button class="btn btn-primary fw-bold" type="submit">Update</button>
            <button class="btn btn-warning fw-bold text-light" type="reset">Reset</button>
        </form>
    @endforeach
@endsection
