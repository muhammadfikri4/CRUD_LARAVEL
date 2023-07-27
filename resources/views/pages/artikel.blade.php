@extends('struktur.struktur_webHimti2')
@section('content')
    <div class="container">
        <section id="speakers">
            <div class="section-title" data-aos="fade-up">
                <h2>HIMTI</h2>
                <p>Artikel</p>
            </div>
            <div class="col-12 text-center pb-2">
                <p>Beberapa Artikel kami dalam acara HIMTI FESTIVAL</p>
            </div>
            <div class="row">
                @foreach ($artikels as $artikel)
                    <div class="col-lg-4 col-md-4">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('storage/' . $artikel->image) }}" alt="Speaker 1" class="img-fluid">
                            <div class="details">
                                <h3><a href="/artikel/{{ $artikel->id }}">{{ $artikel->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach

        </section>

        @include('include.footer')
    </div>
    </div>
@endsection
