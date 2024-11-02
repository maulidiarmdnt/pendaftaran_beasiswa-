<?php

use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeasiswaController::class, 'beranda'])->name('beranda');
Route::get('/daftar', [BeasiswaController::class, 'daftar'])->name('daftar');
Route::post('/daftar', [BeasiswaController::class, 'store'])->name('store');
Route::get('/hasil', [BeasiswaController::class, 'hasil'])->name('hasil');
Route::get('/grafik', [BeasiswaController::class, 'grafik'])->name('grafik');
