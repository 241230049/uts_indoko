@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto space-y-12">
    
    <!-- Hero Section -->
    <div class="text-center py-6">
        <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Tentang Platform Kami</h1>
        <p class="mt-4 text-base leading-relaxed text-slate-500 max-w-2xl mx-auto">
            Kami adalah jembatan kebaikan yang mempertemukan para donatur yang memiliki barang layak pakai berlebih dengan masyarakat yang lebih membutuhkan.
        </p>
    </div>

    <!-- Visi & Misi Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
            <h2 class="text-lg font-bold text-slate-900 mb-3">Visi Kami</h2>
            <p class="text-slate-600 text-sm leading-relaxed">
                Menjadi platform donasi sirkular tepercaya di Indonesia yang mampu mengurangi limbah rumah tangga sekaligus menciptakan dampak sosial nyata demi kesejahteraan sesama.
            </p>
        </div>
        
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
            <h2 class="text-lg font-bold text-slate-900 mb-3">Misi Kami</h2>
            <p class="text-slate-600 text-sm leading-relaxed">
                Mempermudah proses penyaluran barang donasi secara transparan, mengedukasi masyarakat tentang pentingnya memperpanjang masa pakai barang, dan menumbuhkan budaya saling peduli.
            </p>
        </div>
    </div>

    <!-- Nilai Utama Platform -->
    <div class="bg-slate-900 text-white rounded-2xl p-8 sm:p-10">
        <h2 class="text-xl font-bold mb-6 text-center md:text-left">Mengapa Memilih Platform Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
            <div class="space-y-2">
                <h3 class="font-semibold text-emerald-400">100% Gratis</h3>
                <p class="text-slate-400 leading-relaxed">Seluruh barang yang terdaftar di sini murni untuk didonasikan tanpa ada transaksi jual-beli tersembunyi.</p>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-emerald-400">Tepat Sasaran</h3>
                <p class="text-slate-400 leading-relaxed">Donasi disalurkan langsung secara personal atau melalui komunitas yang benar-benar membutuhkan konfirmasi pemilik.</p>
            </div>
            <div class="space-y-2">
                <h3 class="font-semibold text-emerald-400">Ramah Lingkungan</h3>
                <p class="text-slate-400 leading-relaxed">Setiap barang yang berpindah tangan berarti satu barang yang terselamatkan dari tempat pembuangan akhir.</p>
            </div>
        </div>
    </div>

</div>
@endsection