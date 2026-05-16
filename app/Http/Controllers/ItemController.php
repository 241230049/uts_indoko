<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // READ: Menampilkan beranda utama barang
    public function index()
    {
        $items = Item::latest()->get();
        return view('items.index', compact('items'));
    }

    public function katalog()
    {
        $items = Item::latest()->get();
        // Target file blade tetap explore.blade.php agar Anda tidak perlu me-rename nama filenya di VS Code
        return view('items.katalog', compact('items'));
    }

    // CUSTOM: Halaman Tentang Kami
    public function about()
    {
        return view('items.about');
    }

    // CREATE: Form tambah barang
    public function create()
    {
        return view('items.create');
    }

    // CREATE: Menyimpan data barang baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'kondisi' => 'required',
            'kontak_pemilik' => 'required',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Barang berhasil dibagikan!');
    }

    // UPDATE: Form edit barang
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    // UPDATE: Memperbarui data barang
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Data barang berhasil diperbarui!');
    }

    // DELETE: Menghapus barang
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Barang berhasil dihapus.');
    }

    // PENCEGAH ERROR: Mengarahkan rute show bawaan resource kembali ke depan
    public function show($id)
    {
        return redirect()->route('items.index');
    }
}