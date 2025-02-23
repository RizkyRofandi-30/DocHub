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

                <<form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="cta-btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">Keluar</a>
                    </form>
            </div>

        </div>

    </header>

    <section id="medical-records" class="medical-records section">

        <div class="container">

            <div class="row gy-4">
                <div class="col-xl-12">

                    <!-- Medical History -->
                    <h3>Medical History</h3>
                    <ul>
                        <li>
                            <strong>2025-02-10</strong> - <em>Dr. John Doe</em> - <span>Diagnosis: Hypertension</span>
                            <a href="">View Details</a>
                        </li>
                        <!-- More medical history items -->
                    </ul>

                    <!-- Lab Results -->
                    <h3>Lab Results</h3>
                    <ul>
                        <li>
                            <strong>2025-01-15</strong> - <em>Blood Test</em> - <span>Result: Normal</span>
                            <a href="">View Details</a>
                        </li>
                        <!-- More lab results items -->
                    </ul>

                    <!-- Prescriptions -->
                    <h3>Prescriptions</h3>
                    <ul>
                        <li>
                            <strong>2025-01-10</strong> - <em>Medication: Lisinopril</em> - <span>Dosage: 10mg daily</span>
                            <a href="">View Details</a>
                        </li>
                        <!-- More prescription items -->
                    </ul>

                </div>
            </div>

        </div>

    </section>
@endsection
