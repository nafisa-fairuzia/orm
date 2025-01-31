<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenulisController;

Route::get('/penulis',[PenulisController::class,'index']);

// Route::get('/gallery', function() {
//     return view('gallery'); 
// });

// Route::get('/sekolah/{sekolah}/{guru}/{alamat}', function ($sekolah, $guru, $alamat) {
//     return "Nama Sekolah: $sekolah, Nama Guru: $guru, Alamat: $alamat";
// });


// Route::get('/', [DokterController::class, 'index']);
// Route::get('/dokter', [DokterController::class, 'tampil']);