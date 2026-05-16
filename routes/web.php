<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

// 1. Mengarahkan halaman utama langsung ke daftar beranda barang
Route::get('/', [ItemController::class, 'index']);

// 2. Rute Khusus (Wajib di atas resource agar tidak bentrok)
Route::get('/items/katalog', [ItemController::class, 'katalog'])->name('items.katalog');
Route::get('/items/about', [ItemController::class, 'about'])->name('items.about');

// 3. Rute Utama CRUD (Cukup ditulis satu kali saja)
Route::resource('items', ItemController::class);