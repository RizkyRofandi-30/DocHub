<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\MedicController;

// Pengguna
Route::get('/', function () {
    return view('pengguna.index');
})->name('index');

Route::get('/register', [RegisteredUserController::class, 'create']);

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/login', [AuthenticatedSessionController::class, 'create']);

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

Route::get('/halaman', [HalamanUtamaController::class, 'index'])->name('halamanutama');

Route::get('/artikel/{id}', [ArticleController::class, 'show'])->name('artikel');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/buatjanji', function () {
    return view('Pengguna.buatjanji');
})->name('buatjanji');


Route::get('/riwayat', function () {
    return view('Pengguna.riwayat');
})->name('riwayat');


// Admin
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




require __DIR__ . '/auth.php';
