<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function __invoke()
    {
        // Mengambil data barang untuk ditampilkan di halaman katalog
        $campaigns = Campaign::latest()->get();
        return view('katalog', compact('campaigns'));
    }
}