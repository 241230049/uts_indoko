<?php

use Illuminate\Support\Facades\Route;
// Import semua controller yang digunakan
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\AboutController;

// Rute Beranda & CRUD Barang (Otomatis menghandle index, create, store, edit, update, destroy)
Route::resource('campaigns', CampaignController::class);

// Rute Mengarah ke halaman utama Beranda (bisa diarahkan ke index milik CampaignController)
Route::get('/', [CampaignController::class, 'index'])->name('home');

// Rute Katalog (Memanggil KatalogController)
Route::get('/katalog', KatalogController::class)->name('katalog');

// Rute Tentang Kami (Memanggil AboutController)
Route::get('/about', AboutController::class)->name('about');