@extends('Pengguna.template')

@section('title')
    Halaman Utama
@endsection

@section('content')
    <header id="header" class="header sticky-top">

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-end">
                <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center me-auto">
                    <img src="{{ asset('img/index/logo.png') }}" alt="">
                </a>

                <nav id="navmenu" class="navmenu">
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                    <ul>
                        <li><a href="{{ route('janji') }}" class="nav-link">Janji Temu</a></li>
                        <li><a href="{{ route('riwayat') }}" class="nav-link">Riwayat</a></li>
                        <li><a href="{{ route('profil') }}" class="nav-link">Profil</a></li>
                    </ul>
                </nav>

                <a class="cta-btn" href="">Keluar</a>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Dashboard Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-heartbeat icon"></i></div>
                            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-pills icon"></i></div>
                            <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-thermometer icon"></i></div>
                            <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-dna icon"></i></div>
                            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <span class="badge">Machine Learning</span>
                            <span style="float: right; color: gray; font-size: 12px;">3 weeks ago</span>
                            <div class="title">Dolorum blanditiis quaerat officia voluptatem quidem quibusdam ad.</div>
                            <div class="description">Et doloribus magnam consequatur. Qui autem soluta explicabo maxime unde
                                non et. Ullam quia deleniti...</div>
                            <div class="footer">
                                <a href="#" class="read-more">Read more →</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            </div>
        @endsection
