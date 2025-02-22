@extends('Pengguna.template')

@section('title')
    Artikel - DocHub
@endsection

@section('content')
    <!-- Artikel Page -->

    <body class="artikel-page">
        <header class="header sticky-top">
            <div class="container d-flex justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets/img/index/logo.png" alt="">
                </a>
                <nav class="navmenu">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="Artikel.html" class="active">Artikel</a></li>
                        <li><a href="form.html">Riwayat</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            <section class="artikel-section section">
                <div class="container">
                    <h2>Artikel Kesehatan</h2>
                    <p>Temukan berbagai artikel kesehatan bermanfaat:</p>
                    <ul class="artikel-list">
                        <li><a href="#">Manfaat Berolahraga Secara Rutin</a></li>
                        <li><a href="#">Tips Pola Makan Sehat untuk Semua Usia</a></li>
                    </ul>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <p>&copy; 2025 DocHub. All Rights Reserved.</p>
            </div>
        </footer>

        <script src="assets/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

    </html>
@endsection
