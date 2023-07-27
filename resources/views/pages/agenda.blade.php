@extends('struktur.struktur_webHimti2')
@section('content')
    <div class="container">
        <section id="speakers">
            <div class="section-title" data-aos="fade-up">
                <h2>HIMTI</h2>
                <p>Agenda</p>
            </div>
            <div class="col-12 text-center pb-2">
                <p>Beberapa Agenda kami dalam acara HIMTI FESTIVAL</p>
            </div>
            <div class="row">
                @foreach ($acaras as $acara)
                    <div class="col-lg-4 col-md-4">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('storage/' . $acara->image) }}" alt="Speaker 1" class="img-fluid">
                            <div class="details">
                                <h3><a href="/agenda/{{ $acara->id }}">{{ $acara->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <br>
        <section id="speakers">
            <div class="container" data-aos="fade-up">
                <div class="section-title" data-aos="fade-up">
                    <h2>HIMTI</h2>
                    <p>Pembicara</p>
                </div>
                <div class="col-12 text-center pb-2">
                    <p>Beberapa Pembicara kami dalam acara HIMTI FESTIVAL</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('FrontEnd-Himti-master/assets/images/pakono.jpg') }}" alt="Speaker 1"
                                class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Onno Widodo Purbo</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('FrontEnd-Himti-master/assets/images/rajif.jpg') }}" alt="Speaker 2"
                                class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Rajif Mahendra</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('FrontEnd-Himti-master/assets/images/erry.jpeg') }}" alt="Speaker 3"
                                height="500" width="500" class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Ery Ricardo</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <br>
                            <img src="{{ asset('FrontEnd-Himti-master/assets/images/pakoskar.jpeg') }}" alt="Speaker 4"
                                height="500" width="800" class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Oskar Riandi</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('FrontEnd-Himti-master/assets/images/beno.jpg') }}" alt="Speaker 5"
                                width="350" class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Beno Kunto Pradekso</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('FrontEnd-Himti-master/assets/images/yudho.jpg') }}" alt="Speaker 6"
                                width="400" class="img-fluid">
                            <div class="details">
                                <h3><a href="#">Yudho Giri Sucahyo</a></h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="customer-feedback" id="feedback-section">
            <div class="section-title" data-aos="fade-up">
                <h2>HIMTI</h2>
                <p>Partnership</p>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme grid-margin">
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/images/permikomnas.png') }}" width="89"
                                    height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Perhimpunan Mahasiswa Informatika Dan Komputer Nasional
                                </p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">PERMIKOMNAS</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/images/bangkukelas_ig-02.png') }}"
                                    width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted"><br>bangkukelas.id</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Bangku[KELAS]</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('include.footer')
    </div>
    </div>
@endsection
