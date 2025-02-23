@extends('Pengguna.template')

@section('title')
    Halaman Utama
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

    <main class="main">

        <!-- Dashboard Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">
                <div class="row gy-4">
                    @foreach ($articles as $article)
                        {{-- Start Item --}}
                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <!-- Select one icon based on article index -->
                                @php
                                    $icon = $icons[$loop->index % count($icons)]; // Cycle through icons
                                @endphp
                                <div class="icon"><i class="{{ $icon }} icon"></i></div>
                                <!-- Display only one icon -->

                                <h4>
                                    <a href="{{ route('artikel', ['id' => $article['id']]) }}" class="stretched-link">
                                        {{ Str::limit($article['title'], 30) }}
                                    </a>
                                </h4>
                                <p>{{ Str::limit($article['body'], 80) }}</p>

                                <!-- Footer -->
                                <div class="footer position-absolute" style="bottom: 0; right: 0; margin-right:3%;">
                                    <a href="#" class="read-more">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
