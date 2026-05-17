<?php

namespace App\Http\Controllers;

use App\Models\Campaign; 
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    // Menampilkan beranda utama barang beserta datanya
    public function index()
    {
        $campaigns = Campaign::latest()->get();
        return view('campaigns.index', compact('campaigns'));
    }

    // Form tambah barang
    public function create()
    {
        return view('campaigns.create');
    }

    public function store(Request $request)
    {
    // 1. Proses validasi data dari form
    $validated = $request->validate([
        'nama_barang' => 'required|string|max:255',
        'kategori'    => 'required|string',
        'kondisi'     => 'required|string',
        'kontak_pemilik' => 'required|string',
        'deskripsi'   => 'required|string',
    ]);

    // 2. Simpan data ke database
    Campaign::create($validated);

    // 3. DIUBAH DI SINI: Alihkan ke route bernama 'katalog'
    return redirect()->route('katalog')->with('success', 'Barang donasi Anda berhasil ditambahkan ke katalog!');
    }

    // Form edit barang
    public function edit(Campaign $campaign)
    {
        return view('campaigns.edit', compact('campaign'));
    }

    // Memperbarui data barang
    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        $campaign->update($request->all());
        return redirect()->route('campaigns.index')->with('success', 'Data barang berhasil diperbarui!');
    }

    public function destroy(Campaign $campaign)
    {
    $campaign->delete();
    
    // MENGGUNAKAN ->with('deleted', ...) khusus untuk alert merah hapus
    return redirect()->route('katalog')->with('deleted', 'Barang donasi telah berhasil dihapus dari katalog.');
    }
}