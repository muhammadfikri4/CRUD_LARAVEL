@extends('struktur.dashboard_struktur')
@section('content')
    @foreach ($angkatan as $item)
        <form action="{{ route('action-updateAngkatan', $item->id) }}" method="POST" class="mx-3" style="margin-top: 70px">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tahun Angkatan</label>
                <input name="angkatan" type="text" class="form-control @error('angkatan') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="Tahun Angkatan" value="{{ $item->angkatan }}">
                @error('angkatan')
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
