<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;




Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/layanan',[LayananController::class,'index'])->name('layanan');
Route::get('/layanan/paketA',[LayananController::class,'paketA'])->name('layanan.paketA');
Route::get('/layanan/paketB',[LayananController::class,'paketB'])->name('layanan.paketB');
Route::get('/layanan/paketC',[LayananController::class,'paketC'])->name('layanan.paketC');