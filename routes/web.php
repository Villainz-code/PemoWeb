<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\Beranda::class, 'index'])->name('beranda');
Route::get('/datadiri', [App\Http\Controllers\DataDiri::class, 'index'])->name('datadiri');
Route::get('/aktivitas', [App\Http\Controllers\Aktivitas::class,'index'])->name('aktivitas');
Route::get('/kontak', [App\Http\Controllers\Kontak::class,'index'])->name('kontak');
Route::get('/kontak/hubungi', [App\Http\Controllers\Kontak::class, 'hubungi'])->name('hubungi');
