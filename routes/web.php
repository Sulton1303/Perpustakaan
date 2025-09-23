<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/tambah-buku', [BukuController::class, 'create']);
Route::post('/simpan-buku', [BukuController::class, 'store']);
