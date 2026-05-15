@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    
    <!-- Judul Halaman -->
    <div class="text-center mb-12">
        <h1 class="text-3xl font-bold tracking-tight text-slate-900">Panduan Berbagi Donasi</h1>
        <p class="mt-2 text-sm text-slate-500">Mohon pelajari panduan ini agar bantuan Anda dapat memberikan manfaat maksimal.</p>
    </div>

    <!-- Alur Langkah-Langkah -->
    <div class="space-y-6">
        <h2 class="text-lg font-bold text-slate-900 mb-4 border-b pb-2">Langkah Berdonasi</h2>
        
        <div class="relative pl-8 border-l-2 border-emerald-500 space-y-1">
            <div class="absolute -left-[9px] top-1 bg-emerald-500 h-4 w-4 rounded-full border-4 border-white"></div>
            <h3 class="font-semibold text-slate-950 text-base">1. Sortir Barang Anda</h3>
            <p class="text-sm text-slate-600 leading-relaxed">Pastikan barang yang ingin didonasikan masih dalam kondisi layak pakai, bersih, dan berfungsi dengan baik jika berupa alat elektronik.</p>
        </div>

        <div class="relative pl-8 border-l-2 border-emerald-500 space-y-1">
            <div class="absolute -left-[9px] top-1 bg-emerald-500 h-4 w-4 rounded-full border-4 border-white"></div>
            <h3 class="font-semibold text-slate-950 text-base">2. Isi Formulir Donasi</h3>
            <p class="text-sm text-slate-600 leading-relaxed">Klik tombol "Bagikan Barang" di menu atas. Tuliskan deskripsi yang jujur mengenai kondisi barang, ukuran (jika pakaian), serta sertakan nomor kontak yang aktif.</p>
        </div>

        <div class="relative pl-8 border-l-2 border-slate-200 space-y-1">
            <div class="absolute -left-[9px] top-1 bg-emerald-500 h-4 w-4 rounded-full border-4 border-white"></div>
            <h3 class="font-semibold text-slate-950 text-base">3. Konfirmasi Penerima</h3>
            <p class="text-sm text-slate-600 leading-relaxed">Penerima manfaat atau perwakilan komunitas akan menghubungi Anda secara langsung melalui kontak yang Anda cantumkan untuk koordinasi.</p>
        </div>
    </div>

    <!-- Aturan Kelayakan Barang -->
    <div class="mt-12 bg-amber-50 border border-amber-200 rounded-2xl p-6 sm:p-8">
        <h2 class="text-base font-bold text-amber-900 mb-3 flex items-center gap-2">
            <svg class="h-5 w-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            Kriteria Kelayakan Barang
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs sm:text-sm text-amber-800">
            <div>
                <span class="font-semibold block mb-1">Diperbolehkan:</span>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Pakaian bersih tidak robek/bernoda parah.</li>
                    <li>Buku bacaan dengan halaman yang masih lengkap.</li>
                    <li>Peralatan dapur atau perabotan kokoh.</li>
                    <li>Elektronik yang masih menyala dengan baik.</li>
                </ul>
            </div>
            <div>
                <span class="font-semibold block mb-1">Tidak Diperbolehkan:</span>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Pakaian dalam bekas atau handuk usang.</li>
                    <li>Makanan/obat-obatan yang sudah kedaluwarsa.</li>
                    <li>Barang yang rusak total dan tidak bisa diperbaiki.</li>
                    <li>Barang tiruan yang melanggar hukum.</li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection