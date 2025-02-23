@extends('Pengguna.template')

@section('title')
    Artikel - DocHub
@endsection

@section('content')
    <!-- Artikel Page -->

    <body class="artikel-page">
        <header class="header sticky-top">
            <div class="container d-flex justify-content-between">
                <a href="{{ route('halamanutama') }}" class="logo d-flex align-items-center me-auto">
                    <img src="{{ asset('assets/img/index/logo.png') }}" alt="">
                </a>
                <nav class="navmenu">
                    <ul>
                        <li><a href="{{ route('buatjanji') }}" class="active">Janji Temu</a></li>
                        <li><a href="{{ route('riwayat') }}">Riwayat</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="cta-btn" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                        this.closest('form').submit();">Keluar</a>
                        </form>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            <section class="artikel-section section">
                <div class="container">
                    @foreach ($articles as $article)
                        <h2>{{ $article['title'] }}</h2>
                        <ul class="artikel-list">
                            <li><a href="#">{{ $article['category'] }}</a></li>
                        </ul>
                        <p>{!! nl2br(e($article['body'])) !!}</p>
                    @endforeach
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
