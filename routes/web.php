<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MedicController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');


Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('/admin/articles', [ArticleController::class, 'index'])->name('admin.articles');

Route::delete('/admin/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

Route::post('/admin/upload-articles', [ArticleController::class, 'store'])->name('articles.store');

Route::get('/admin/upload-articles', [ArticleController::class, 'create'])->name('articles.create');

Route::post('/admin/tambah-dokter', [MedicController::class, 'storeDoc'])->name('medic.storeDoc');

Route::get('/admin/tambah-dokter', [MedicController::class, 'create'])->name('medic.create');

Route::get('/admin/tambah-dokter', function () {
    return view('admin.tambah-dokter');
});

Route::post('/admin/tambah-perawat', [MedicController::class, 'storeNurse'])->name('medic.storeNurse');

Route::get('/admin/tambah-perawat', [MedicController::class, 'create'])->name('medic.create');

Route::get('/admin/tambah-perawat', function () {
    return view('admin.tambah-perawat');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/index', function () {
    return view('Pengguna.index');
})->name('index');


Route::get('/index/artikel', function () {
    return view('Pengguna.artikel');
})->name('artikel');

Route::get('/index/log in', function () {
    return view('profile.dashboard');
});

Route::get('/index/artikel/index', function () {
    return view('Pengguna.index');
})->name('home');

Route::get('/index/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/buatjanji', function () {
    return view('Pengguna.buatjanji');
})->name('buatjanji');

Route::get('/halaman', function () {
    return view('Pengguna.halamanutama');
});

Route::get('/halaman/dashboard', function () {
    return view('Pengguna.halamanutama');
})->name('dashboard');

Route::get('/halaman/janji', function () {
    return view('Pengguna.buatjanji');
})->name('janji');

Route::get('/halaman/profil', function () {
    return view('profile.profiledit');
})->name('profil');

Route::get('/halaman/riwayat', function () {
    return view('Pengguna.riwayat');
})->name('riwayat');
