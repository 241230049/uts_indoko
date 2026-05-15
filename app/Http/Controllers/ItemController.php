<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // READ: Menampilkan semua barang
    public function index()
    {
        $items = Item::latest()->get();
        return view('items.index', compact('items'));
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
}