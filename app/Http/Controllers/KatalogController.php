<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    /**
     * Menangani request tunggal untuk halaman katalog (Single Action Controller)
     */
    public function __invoke(Request $request)
    {
        // Mengambil data donasi terbaru dari database untuk ditampilkan di grid katalog
        $campaigns = Campaign::latest()->get();

        // Mengembalikan view katalog dengan membawa data campaigns
        return view('katalog', compact('campaigns'));
    }
}