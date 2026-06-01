<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HubungiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/paketA', [LayananController::class, 'paketA'])->name('layanan.paketA');
Route::get('/layanan/paketB', [LayananController::class, 'paketB'])->name('layanan.paketB');
Route::get('/layanan/paketC', [LayananController::class, 'paketC'])->name('layanan.paketC');
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar');

Route::get('/hubungi', [HubungiController::class, 'index'])->name('hubungi');
Route::post('/hubungi', [HubungiController::class, 'sendEmail'])->name('hubungi.kirim');


// controller untuk admin
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.proses');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Admin Group Area
    // Di dalam Grup Admin pada file routes/web.php Anda
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // Rute Master Santri Lengkap (CRUD)
        Route::get('/santri', [SantriController::class, 'index'])->name('santri.index');
        Route::get('/santri/tambah', [SantriController::class, 'create'])->name('santri.tambah');
        Route::post('/santri/tambah', [SantriController::class, 'store'])->name('santri.simpan');
        Route::get('/santri/{id}/edit', [SantriController::class, 'edit'])->name('santri.edit');
        Route::put('/santri/{id}', [SantriController::class, 'update'])->name('santri.update');
        Route::delete('/santri/{id}', [SantriController::class, 'destroy'])->name('santri.hapus');
    });

    Route::get('/ortu/dashboard', [OrtuController::class, 'dashboard'])->name('ortu.dashboard');
});
