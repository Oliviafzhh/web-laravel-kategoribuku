<?php

use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\haiController;

Route::get('/hai', [haiController::class,'index']);
Route::get('/kategori-buku', [KategoriBukuController::class, 'index'])->name('kategori-buku.index');
Route::get('/kategori-buku.tambah', [KategoriBukuController::class, 'create'])->name('kategori-buku.tambah');
Route::post('/kategori-buku.data',[KategoriBukuController::class,'store']);
