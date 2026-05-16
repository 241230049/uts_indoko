@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto animate-fade-in mt-6">
    <div class="text-center mb-12">
        <span class="text-xs font-bold text-blue-600 uppercase tracking-widest bg-blue-50 px-3 py-1 rounded-full">Tentang Kami</span>
        <h1 class="text-2xl font-extrabold text-slate-950 tracking-tight sm:text-4xl mt-3">Mengenal Platform LepasPakai</h1>
        <p class="mt-3 text-base text-slate-500 max-w-xl mx-auto leading-relaxed">
            Menghubungkan kebaikan hati Anda dengan mereka yang membutuhkan melalui sirkulasi barang bekas layak pakai.
        </p>
    </div>

    <div class="bg-white border border-slate-200/60 rounded-3xl p-8 shadow-sm mb-12 flex flex-col md:flex-row gap-8 items-center">
        <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-3xl shrink-0 border border-blue-100">
            <i class="fa-solid fa-handshake-angle"></i>
        </div>
        <div>
            <h2 class="text-lg font-bold text-slate-900">Visi & Misi</h2>
            <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                LepasPakai hadir sebagai solusi atas menumpuknya barang berharga yang sudah tidak digunakan di gudang rumah. Daripada menjadi limbah, kami percaya setiap barang layak pakai berhak mendapatkan <strong>"kehidupan kedua"</strong> di tangan pemilik baru yang lebih membutuhkan.
            </p>
        </div>
    </div>

    <div class="bg-white border border-slate-200/60 rounded-3xl p-8 sm:p-10 shadow-sm">
        <div class="text-center max-w-xl mx-auto mb-10">
            <h2 class="text-xl font-bold text-slate-900 tracking-tight">Bagaimana Alur Donasinya?</h2>
            <p class="text-xs text-slate-500 mt-1">Hanya butuh 3 langkah mudah untuk mulai beraksi.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center flex flex-col items-center group">
                <div class="w-12 h-12 bg-slate-50 text-blue-600 border border-slate-200 rounded-2xl flex items-center justify-center text-base font-bold transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white">
                    <i class="fa-solid fa-pen-to-square"></i>
                </div>
                <h3 class="text-sm font-bold text-slate-900 mt-4">1. Daftarkan Barang</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Isi formulir info barang, kondisi riil, beserta nomor WhatsApp Anda.</p>
            </div>

            <div class="text-center flex flex-col items-center group">
                <div class="w-12 h-12 bg-slate-50 text-blue-600 border border-slate-200 rounded-2xl flex items-center justify-center text-base font-bold transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <h3 class="text-sm font-bold text-slate-900 mt-4">2. Masuk Katalog</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Barang langsung tayang secara publik di halaman jelajahi secara realtime.</p>
            </div>

            <div class="text-center flex flex-col items-center group">
                <div class="w-12 h-12 bg-slate-50 text-blue-600 border border-slate-200 rounded-2xl flex items-center justify-center text-base font-bold transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white">
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>
                <h3 class="text-sm font-bold text-slate-900 mt-4">3. Hubungi & Serahkan</h3>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Penerima akan mengirim pesan WA otomatis ke Anda untuk mengambil barang.</p>
            </div>
        </div>
    </div>
</div>
@endsection