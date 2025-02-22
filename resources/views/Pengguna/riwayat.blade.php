@extends('Pengguna.template')

@section('title')
    Halaman Utama
@endsection

@section('content')
    <header id="header" class="header sticky-top">

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-end">
                <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center me-auto">
                    <img src="{{ asset('assets/img/index/logo.png') }}" alt="">
                </a>

                <nav id="navmenu" class="navmenu">
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                    <ul>
                        <li><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                        <li><a href="{{ route('janji') }}" class="nav-link">Janji Temu</a></li>
                        <li><a href="{{ route('profil') }}" class="nav-link">Profil</a></li>
                    </ul>
                </nav>

                <a class="cta-btn" href="">Keluar</a>

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
