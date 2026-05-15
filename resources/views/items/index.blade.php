@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    
    <!-- Bagian Judul -->
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">Katalog Barang Tersedia</h1>
            <p class="mt-1 text-sm text-slate-500">Temukan atau bagikan barang bekas layak pakai secara gratis.</p>
        </div>
    </div>

    <!-- Notifikasi Sukses -->
    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 rounded-lg flex items-start gap-3">
            <svg class="h-5 w-5 text-emerald-600 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-sm font-medium text-emerald-800">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Grid Kartu Barang -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($items as $item)
            <div class="bg-white rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow duration-200 flex flex-col justify-between overflow-hidden">
                
                <!-- Badan Kartu -->
                <div class="p-6 flex-grow">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">
                            {{ $item->kategori }}
                        </span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-700">
                            Kondisi: {{ $item->kondisi }}
                        </span>
                    </div>
                    
                    <h2 class="text-lg font-bold text-slate-900 line-clamp-1 mb-2">{{ $item->nama_barang }}</h2>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">{{ $item->deskripsi }}</p>
                    
                    <!-- Detail Kontak -->
                    <div class="bg-slate-50 rounded-lg p-3 border border-slate-100 space-y-1.5">
                        <div class="text-xs text-slate-500 flex justify-between">
                            <span>Kontak Penyedia:</span>
                            <span class="font-semibold text-slate-700">{{ $item->kontak_pemilik }}</span>
                        </div>
                    </div>
                </div>

                <!-- Bagian Tombol Aksi -->
                <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-end gap-3">
                    <a href="{{ route('items.edit', $item->id) }}" class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-semibold text-slate-700 bg-white border border-slate-300 rounded-md shadow-sm hover:bg-slate-50 transition-colors">
                        Edit
                    </a>
                    
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center justify-center px-3 py-1.5 text-xs font-semibold text-red-600 bg-white border border-red-200 rounded-md shadow-sm hover:bg-red-50 transition-colors">
                            Hapus
                        </button>
                    </form>
                </div>

            </div>
        @empty
            <!-- State jika data kosong -->
            <div class="col-span-full bg-white border border-dashed border-slate-300 rounded-2xl p-12 text-center">
                <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5" />
                </svg>
                <h3 class="mt-2 text-sm font-semibold text-slate-900">Belum ada barang</h3>
                <p class="mt-1 text-sm text-slate-500">Jadilah orang pertama yang membagikan barang bekas Anda.</p>
                <div class="mt-6">
                    <a href="{{ route('items.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-white bg-emerald-600 rounded-lg hover:bg-emerald-700">
                        Bagikan Barang Sekarang
                    </a>
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection