@extends('Pengguna.template')

@section('title')
    Masuk & Daftar
@endsection

@section('content')
    <div class="container" id="wadahAWAL">
        <!-- MASUK -->
        <div class="form-box login">
            <form action="Masuk.php" method="POST">
                <h1>Masuk</h1>
                <div class="input-box">
                    <input type="text" id="nama" name="nama" placeholder="Nama Anda" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" id="katasandi" name="katasandi" placeholder="Kata Sandi" required>
                    <i class='bx bxs-lock'></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Lupa Kata Sandi?</a>
                </div>
                <button type="submit" name="masukbtn" class="btn">Masuk</button>
                <p>Atau Masuk Dengan</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                </div>
            </form>
        </div>
        <!-- DAFTAR -->
        <div class="form-box register">
            <form action="Daftar.php" method="POST">
                <h1>Daftar</h1>
                <div class="input-box">
                    <input type="text" id="nama" name="nama" placeholder="Nama Anda" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" id="katasandi" name="katasandi" placeholder="Kata Sandi" required>
                    <i class='bx bxs-lock'></i>
                </div>
                <button type="submit" name="daftarbtn" class="btn">Daftar</button>
                <p>Atau Daftar Dengan</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Halo, selamat datang!!</h1>
                <p>Belum punya akun?</p>
                <button class="btn register-btn">Daftar</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Selamat datang kembali!!</h1>
                <p>Sudah punya akun?</p>
                <button class="btn login-btn">Masuk</button>
            </div>
        </div>
    </div>
    <script src="Script.js"></script>
@endsection
