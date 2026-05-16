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

    // Menyimpan data barang baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'kondisi' => 'required',
            'kontak_pemilik' => 'required',
        ]);

        Campaign::create($request->all());
        return redirect()->route('campaigns.index')->with('success', 'Barang berhasil dibagikan!');
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

    // Menghapus barang
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return redirect()->route('campaigns.index')->with('success', 'Barang berhasil dihapus.');
    }

    public function show($id)
    {
        return redirect()->route('campaigns.index');
    }
}