@extends('struktur.struktur_webHimti2')
@section('content')
    <section id="speakers-details">
        <div class="container">
            <div class="section-header">
                <h2>Detail Acara</h2>
            </div>

            @foreach ($artikel as $item)
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Speaker 1" class="img-fluid">
                    </div>

                    <div class="col-md-6 justify-content-center">
                        <div class="align-items-lg-center"><br><br><br>
                            <h2>{{ $item->title }}</h2>
                            <h5>{{ $item->deskripsi }}</h5>



                            <h5> <b>Tanggal : Minggu, 31 Januari 2021. <br> Jam : 13.00 s/d Selesai. <br> Tempat : Aula
                                    Jendral
                                    Soedirman, Universitas Muhammadiyah Tangerang.</b></p>
                        </div>

                    </div>
                </div>
        </div>
        @endforeach
    </section>
@endsection
