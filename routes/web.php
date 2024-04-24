<?php

use App\Http\Controllers\daftarController;
use App\Http\Controllers\hasilController;
use App\Http\Controllers\pilihanController;
use Illuminate\Console\View\Components\Choice;
use Illuminate\Support\Facades\Route;

route::resource('/daftar',daftarController::class);
route::resource('/hasilSemua',hasilController::class);
Route::get('/hasil/{id}', [hasilController::class, 'show'])->name('hasil.show');

Route::view('/', 'option.option');
Route::view('/BeasiswaAkademik', 'option.AkademikOption');
Route::view('/BeasiswaNonAkademik', 'option.nonAkademikOption');



