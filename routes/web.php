<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect('/mahasiswa'); });

// Rute Cetak PDF (Harus di atas Route::resource)
Route::get('/mahasiswa/cetak', [MahasiswaController::class, 'cetak_pdf']);

// Rute CRUD Otomatis
Route::resource('mahasiswa', MahasiswaController::class);