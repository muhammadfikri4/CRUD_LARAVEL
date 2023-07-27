@extends('struktur.struktur_webHimti2')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="customer-feedback" id="feedback-section">
                <div class="section-title" data-aos="fade-up">
                    <h2>HIMTI</h2>
                    <p>Materi Pembelajaran</p>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme grid-margin">
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('FrontEnd-Himti-master/assets/images/java.png') }}" width="89"
                                        height="89" alt="" class="img-customer">
                                    <p class="m-0 py-3 text-muted">Java adalah bahasa pemrograman yang dapat dijalankan
                                        di berbagai
                                        komputer termasuk telepon genggam. Bahasa ini awalnya dibuat oleh James Gosling
                                        saat masih bergabung
                                        di Sun Microsystems, yang saat ini merupakan bagian dari Oracle dan dirilis
                                        tahun 1995.</p>
                                    <div class="content-divider m-auto"></div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('FrontEnd-Himti-master/assets/images/html-coding.png') }}"
                                        width="95" height="95" alt="" class="img-customer">
                                    <p class="m-0 py-3 text-muted">Hypertext Markup Language adalah bahasa markah
                                        standar untuk dokumen
                                        yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh
                                        teknologi seperti
                                        Cascading Style Sheets dan bahasa scripting seperti JavaScript dan VBScript.</p>
                                    <div class="content-divider m-auto"></div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('FrontEnd-Himti-master/assets/images/computer.png') }}"
                                        width="85" height="85" alt="" class="img-customer">
                                    <p class="m-0 py-3 text-muted">Desain grafis atau rancang grafis adalah proses
                                        komunikasi menggunakan
                                        elemen visual, seperti tipografi, fotografi, serta ilustrasi yang dimaksudkan
                                        untuk menciptakan
                                        persepsi akan suatu pesan yang disampaikan. Bidang ini melibatkan proses
                                        komunikasi visual dan
                                        desain komunikasi. membentuk gagasan dan pesan secara visual.</p>
                                    <div class="content-divider m-auto"></div>

                                </div>
                            </div>
                        </div>
                        <div class="card customer-cards">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{ asset('FrontEnd-Himti-master/assets/images/android-logo.png') }}"
                                        width="89" height="89" alt="" class="img-customer">
                                    <p class="m-0 py-3 text-muted"> Studio adalah Integrated Development Enviroment
                                        untuk sistem operasi
                                        Android, yang dibangun di atas perangkat lunak JetBrains IntelliJ IDEA dan
                                        didesain khusus untuk
                                        pengembangan Android.</p>
                                    <div class="content-divider m-auto"></div>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="digital-marketing-service" id="digital-marketing-section">
                <div class="section-title" data-aos="fade-up">
                    <h2>HIMTI</h2>
                    <p>Jadwal Pembelajaran</p>
                </div>
                <div class="row grid-margin">
                    @foreach ($jadwal_sharing as $item)
                        @if ($loop->index % 2 === 0)
                            {{-- Gambar Kiri --}}
                            <div class="row align-items-center justify-content-center">
                                <div class="col-12 col-lg-5 text-center flex-item grid-margin" data-aos="fade-right">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="" height="336"
                                        width="306" class="img-fluid">
                                </div>
                                <div class="col-5 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                                    <h3 class="m-0">{{ $item->title }}</h3>
                                    <div class="col-lg-9 col-xl-8 p-0">
                                        <p class="py-4 m-0 text-muted">{{ $item->deskripsi }}</p>
                                        <p class="pb-2 font-weight-medium text-muted"><b>Hari/Tanggal :
                                                {{ $item->jadwal_sharing }}
                                                <br> Jam : 13.00 s/d Selesai <br>
                                                Materi : Presentasi UI UX</p></b>
                                    </div>

                                </div>
                            </div>
                            <br><br>
                            {{-- Tutup Gambar Kiri --}}
                        @elseif ($loop->index % 2 === 1)
                            {{-- Gambar Kanan --}}
                            <div class="row align-items-center justify-content-center">
                                <div class="col-5 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                                    <h3 class="m-0">{{ $item->title }}</h3>
                                    <div class="col-lg-12 col-xl-8 p-0">
                                        <p class="py-4 m-0 text-muted">{{ $item->deskripsi }}</p>
                                        <p class="pb-2 font-weight-medium text-muted"> <b>Hari/Tanggal :
                                                {{ $item->jadwal_sharing }}
                                                <br> Jam : 13.00 s/d Selesai <br>
                                                Materi : WEB DESAIN</p></b>
                                    </div>

                                </div>
                                <div class="col-12 col-lg-3 text-center flex-item grid-margin" data-aos="fade-right">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="" height="236"
                                        width="306" class="img-fluid">
                                </div>
                            </div>
                            <br><br>
                            {{-- Tutup Gambar Kanan --}}
                        @endif
                    @endforeach
                </div>
            </section>
            <br><br>

            @include('include.footer')
        </div>
    </div>
@endsection
