@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-100">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Bagikan Barang Bekas Anda</h1>

    <form action="{{ route('items.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <input type="text" name="nama_barang" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 p-2 border" required>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 p-2 border">
                    <option value="Pakaian">Pakaian</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Buku">Buku</option>
                    <option value="Perabotan">Perabotan</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Kondisi</label>
                <select name="kondisi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 p-2 border">
                    <option value="Seperti Baru">Seperti Baru</option>
                    <option value="Sangat Bagus">Sangat Bagus</option>
                    <option value="Layak Pakai">Layak Pakai</option>
                </select>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Kontak Pemilik (WA/Email)</label>
            <input type="text" name="kontak_pemilik" placeholder="Contoh: 081234567xx" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 p-2 border" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Deskripsi Barang</label>
            <textarea name="deskripsi" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 p-2 border" required></textarea>
        </div>

        <div class="flex justify-end space-x-3 pt-4">
            <a href="{{ route('items.index') }}" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200">Batal</a>
            <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Simpan & Bagikan</button>
        </div>
    </form>
</div>
@endsection