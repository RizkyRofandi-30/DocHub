@extends('Pengguna.template')

@section('title')
    Buat Janji
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
                        <li><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                        <li><a href="{{ route('riwayat') }}" class="nav-link">Riwayat</a></li>
                        <li><a href="{{ route('profil') }}" class="nav-link">Profil</a></li>
                    </ul>
                </nav>

                <a class="cta-btn" href="">Keluar</a>

            </div>

        </div>

    </header>

    <section id="appointment" class="appointment section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Buat Janji</h2>
            <p>Fitur Buat Janji memungkinkan pasien untuk membuat janji temu dengan dokter secara online.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda"
                            required="">
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda"
                            required="">
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="noHp" id="noHp" placeholder="No Hp"
                            required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="datetime-local" name="tanggal" class="form-control datepicker" id="tanggal"
                            placeholder="Tanggal Janji" required="">
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="docter" id="docter" class="form-select" required="">
                            <option value="">Pilih Dokter</option>
                            <option value="Dokter 1">Dokter 1</option>
                            <option value="Dokter 2">Dokter 2</option>
                            <option value="Dokter 3">Dokter 3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                </div>
                <div class="mt-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    <div class="text-center"><button type="submit">Buat Janji</button></div>
                </div>
            </form>

        </div>

    </section>
@endsection
