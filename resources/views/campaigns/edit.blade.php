@extends('app')

@section('content')
<div class="max-w-xl mx-auto bg-white border border-slate-200/70 shadow-sm rounded-2xl overflow-hidden">
    <div class="p-6 border-b border-slate-100 bg-slate-50/50">
        <h2 class="text-lg font-bold text-slate-900">Perbarui Data Donasi</h2>
        <p class="text-xs text-slate-500 mt-0.5">Ubah informasi kelayakan barang donasi Anda.</p>
    </div>

    <form action="{{ route('campaigns.update', $campaign->id) }}" method="POST" class="p-6 space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ $campaign->nama_barang }}" required class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Kategori Barang</label>
                <select name="kategori" class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-sm bg-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                    <option value="Pakaian" {{ $campaign->kategori == 'Pakaian' ? 'selected' : '' }}>Pakaian / Sandang</option>
                    <option value="Elektronik" {{ $campaign->kategori == 'Elektronik' ? 'selected' : '' }}>Elektronik / Gadget</option>
                    <option value="Buku & Pendidikan" {{ $campaign->kategori == 'Buku & Pendidikan' ? 'selected' : '' }}>Buku & Alat Tulis</option>
                    <option value="Peralatan Rumah" {{ $campaign->kategori == 'Peralatan Rumah' ? 'selected' : '' }}>Peralatan Rumah Tangga</option>
                    <option value="Mainan Anak" {{ $campaign->kategori == 'Mainan Anak' ? 'selected' : '' }}>Mainan & Hobi</option>
                    <option value="Lainnya" {{ $campaign->kategori == 'Lainnya' ? 'selected' : '' }}>Lain-lain</option>
                </select>
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Kondisi</label>
                <input type="text" name="kondisi" value="{{ $campaign->kondisi }}" required class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">No. WhatsApp Pemilik</label>
            <input type="tel" name="kontak_pemilik" value="{{ $campaign->kontak_pemilik }}" required class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
        </div>

        <div>
            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Deskripsi & Minus Barang</label>
            <textarea name="deskripsi" rows="4" required class="w-full px-3.5 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">{{ $campaign->deskripsi }}</textarea>
        </div>

        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
            <a href="{{ route('campaigns.index') }}" class="px-4 py-2 text-sm font-medium text-slate-600 hover:bg-slate-50 rounded-xl transition-colors">Batal</a>
            <button type="submit" class="px-5 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-xl shadow-sm transition-colors">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection