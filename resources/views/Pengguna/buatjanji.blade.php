@extends('Pengguna.template')

@section('title')
    Buat Janji
@endsection

@section('content')
    <header id="header" class="header sticky-top">

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-end">
                <a href="{{ route('halamanutama') }}" class="logo d-flex align-items-center me-auto">
                    <img src="{{ asset('assets/img/index/logo.png') }}" alt="">
                </a>

                <nav id="navmenu" class="navmenu">
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                    <ul>
                        <li><a href="{{ route('buatjanji') }}" class="nav-link">Janji Temu</a></li>
                        <li><a href="{{ route('riwayat') }}" class="nav-link">Riwayat</a></li>
                    </ul>
                </nav>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="cta-btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">Keluar</a>
                </form>

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

            <form action="{{ route('buatjanji.store') }}" method="POST" role="form" class="php-email-form">
                @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda"
                            required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda"
                            required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="datetime-local" name="date_time" class="form-control datepicker" id="date_time"
                            placeholder="Tanggal Janji" required>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="doctor_id" id="doctor_id" class="form-select" required>
                            <option value="">Pilih Dokter</option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }} ({{ $doctor->specialist }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)" id="message"></textarea>
                </div>
                <div class="mt-3">
                    <div class="text-center"><button type="submit">Buat Janji</button></div>
                </div>
            </form>

        </div>

    </section>
@endsection
