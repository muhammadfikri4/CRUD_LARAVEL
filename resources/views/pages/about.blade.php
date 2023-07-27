@extends('struktur.struktur_webHimti2')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section id="about" class="about">
                <div class="container">

                    <div class="row justify-content-between">
                        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                            <img src="{{ asset('FrontEnd-Himti-master/assets/images/HIMTI.png') }}" class="img-fluid"
                                alt="" data-aos="zoom-in">
                        </div>
                        <div class="col-lg-6 pt-5 pt-lg-0">
                            <h3 data-aos="fade-up">HIMTI - UMT</h3>
                            <p data-aos="fade-up" data-aos-delay="100">
                                Himpunan Mahasiswa Teknik Inmormatika Universitas Muhammadiyah Tangerang atau HIMTI -
                                UMT
                                adalah
                                himpunan kampus yang tidak hanya berfokus pada organisasi saja tetapi terhadap akademik
                                juga,
                                bahkan tujuan utama HIMTI yaitu untuk meningkatkan nilai akademik
                                Mahasiswa Teknik Informatika Universitas Muhammadiyah Tangerang.
                            </p>
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Tanggal Berdiri HIMTI</h4>
                                    <p></p>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Pendiri HIMTI</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End About Section -->
            <section id="bg" class="team">
                <div class="container" class="faq section-bg">

                    <div class="section-title" data-aos="fade-up">
                        <h2>HIMTI</h2>
                        <p>Struktural Program Studi</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/images/kaprodi.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Syepry Maulana Husain, S.Kom, MTI</h4>
                                        <span>Ketua Program Studi</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/images/sekprodi.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Mahpud, M.Kom</h4>
                                        <span>Sekretaris Program Studi</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
                    </div>
                </div>
            </section>
            <section id="team" class="team">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>HIMTI</h2>
                        <p>Struktural Periode 2020 - 2021</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/kahim.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Andi Burhanuddin</h4>
                                        <span>Bupati HIMTI</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/wakahim.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Mulyana</h4>
                                        <span>Wakil Bupati</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/sekretaris1.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Anik Sofiatun</h4>
                                        <span>Sekretaris 1</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/sekretaris2.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Terry Antikasari</h4>
                                        <span>Sekretaris 2</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/bendahara.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Ahmad Romli</h4>
                                        <span>Bendahara</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/sdm.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Okky Pratama</h4>
                                        <span>Ketua Divisi SDM</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/kominfo.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Nanda Aulia</h4>
                                        <span>Ketua Divisi KOMINFO</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/organisasi.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Faisal M. Ibrahim</h4>
                                        <span>Ketua Divisi Keorganisasian</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/litbang.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Jaenal Mustakim</h4>
                                        <span>Ketua Divisi LITBANG</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member">
                                <img src="{{ asset('FrontEnd-Himti-master/assets/ninestars/assets/img/team/danus.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Bram Yudhatama</h4>
                                        <span>Ketua Divisi DANUS</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="bg" class="faq section-bg">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>HIMTI</h2>
                        <p>Visi & Misi</p>
                    </div>
                    <ul class="faq-list">
                        <li data-aos="fade-up" data-aos-delay="100">
                            <a data-toggle="collapse" class="" href="#faq1">Visi<i
                                    class="icofont-simple-up"></i></a>
                            <div id="faq1" class="collapse show">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit quaerat labore,
                                    magnam
                                    aliquid ea
                                    aliquam, sed, accusantium est mollitia magni aperiam et doloribus similique ratione
                                    rerum beatae quos
                                    explicabo?
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <a data-toggle="collapse" href="#faq2" class="collapsed">Misi<i
                                    class="icofont-simple-up"></i></a>
                            <div id="faq2" class="collapse">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet similique et ad, quas
                                    vero
                                    nulla
                                    repellendus dignissimos omnis. Vero officia praesentium autem dolore natus sit unde
                                    molestias qui
                                    inventore architecto!
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            @include('include.footer')
        </div>
    </div>
@endsection
