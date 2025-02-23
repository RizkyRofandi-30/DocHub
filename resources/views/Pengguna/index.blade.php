@extends('Pengguna.template')

@section('title')
    Tampilan
@endsection

@section('content')
    <header id="header" class="header sticky-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="d-none d-md-flex align-items-center">
                    <i class="bi bi-clock me-1"></i> Senin - Minggu, 24 Jam
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-phone me-1"></i> Emergency Call (0888 1823 9016)
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-end">
                <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
                    <img src="{{ asset('assets/img/index/logo.png') }}" alt="">
                    <!-- Uncomment the line below if you also wish to use a text logo -->
                    <!-- <h1 class="sitename">Medicio</h1>  -->
                </a>

                <nav id="navmenu" class="navmenu">
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn" href="{{ route('register') }}">Masuk</a>

            </div>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/index/hero-carousel/hero-carousel-1.jpg') }}" alt="">
                    <div class="container">
                        <h2>Welcome to Dochub</h2>
                        <p>Akses layanan medis kapan saja, di mana saja, dengan mudah dan aman. </p>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/index/hero-carousel/hero-carousel-2.jpg') }}" alt="">
                    <div class="container">
                        <h2>Fasilitas</h2>
                        <p>Buat janji temu dengan mudah dan akses informasi kesehatan terpercaya kapan saja.</p>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/index/hero-carousel/hero-carousel-3.jpg') }}" alt="">
                    <div class="container">
                        <h2>Pengalaman</h2>
                        <p>Meskipun baru, kami berkomitmen untuk memberikan layanan terbaik dalam informasi kesehatan dan
                            pemesanan janji temu.</p>
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4 d-flex justify-content-center">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-pills icon"></i></div>
                            <h4><a href="" class="stretched-link">Pembuatan Janji Temu</a></h4>
                            <p>Atur janji temu dengan dokter secara online dengan mudah dan cepat.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-thermometer icon"></i></div>
                            <h4><a href="" class="stretched-link">informasi Kesehatan Terpercaya</a></h4>
                            <p>Dapatkan artikel dan tips kesehatan terbaru dari sumber yang kredibel.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-dna icon"></i></div>
                            <h4><a href="" class="stretched-link">Riwayat Medis</a></h4>
                            <p>Akses dan pantau riwayat janji temu serta catatan medis Anda dengan praktis</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section accent-background">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h2>About US</h2>
                            <p>Kami adalah platform layanan kesehatan online yang berkomitmen untuk memberikan akses mudah,
                                cepat, dan
                                terpercaya bagi
                                semua orang yang membutuhkan bantuan medis, kapan pun dan di mana pun mereka berada. Dengan
                                memanfaatkan
                                teknologi
                                terkini dan sistem yang terintegrasi, kami menghubungkan pasien dengan tenaga kesehatan
                                profesional,
                                seperti dokter
                                umum, spesialis, psikolog, dan ahli gizi, tanpa harus meninggalkan kenyamanan rumah.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->
