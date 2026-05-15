<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('items', ItemController::class);
// Mengarahkan halaman utama langsung ke daftar barang
Route::get('/', [ItemController::class, 'index']);

Route::view('/tentang-kami', 'pages.tentang')->name('tentang');
Route::view('/panduan-berbagi', 'pages.panduan')->name('panduan');