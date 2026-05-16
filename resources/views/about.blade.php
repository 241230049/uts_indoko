@extends('app')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <div class="text-center mb-16">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl mb-4 shadow-sm">
            <i class="fa-solid fa-hand-holding-heart text-3xl"></i>
        </div>
        <h1 class="text-3xl font-extrabold text-slate-950 tracking-tight sm:text-4xl">
            Tentang Lepas<span class="text-blue-600">Pakai</span>
        </h1>
        <p class="mt-4 text-base text-slate-500 max-w-2xl mx-auto leading-relaxed">
            Sebuah platform digital berbasis komunitas yang didedikasikan untuk mempermudah penyaluran barang bekas layak pakai kepada mereka yang lebih membutuhkan.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
        <div class="bg-white border border-slate-200/60 rounded-2xl p-6 shadow-sm">
            <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-4">
                <i class="fa-solid fa-eye text-lg"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">Visi Kami</h3>
            <p class="text-sm text-slate-500 leading-relaxed">
                Menjadi jembatan kebaikan digital utama dalam mempromosikan gaya hidup berkelanjutan (*sustainable living*) melalui budaya berbagi barang layak pakai di Indonesia.
            </p>
        </div>

        <div class="bg-white border border-slate-200/60 rounded-2xl p-6 shadow-sm">
            <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center mb-4">
                <i class="fa-solid fa-bullseye text-lg"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-900 mb-2">Misi Kami</h3>
            <p class="text-sm text-slate-500 leading-relaxed">
                Mempermudah proses donasi barang secara langsung dari pemilik ke penerima tanpa perantara yang rumit, guna mengurangi limbah lingkungan dan mempererat solidaritas sosial.
            </p>
        </div>
    </div>

    <div class="bg-white border border-slate-200/60 rounded-2xl p-8 shadow-sm">
        <h3 class="text-xl font-bold text-slate-900 mb-10 text-center tracking-tight">
            Bagaimana LepasPakai Bekerja
        </h3>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 relative">
            <div class="text-center">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center font-black text-lg mx-auto mb-4 border border-blue-100 shadow-sm">1</div>
                <h4 class="font-bold text-slate-900 text-sm mb-1">Pasang Donasi</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Donatur mengunggah data barang bekas layak pakai beserta kontak WhatsApp yang bisa dihubungi.</p>
            </div>

            <div class="text-center">
                <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center font-black text-lg mx-auto mb-4 border border-emerald-100 shadow-sm">2</div>
                <h4 class="font-bold text-slate-900 text-sm mb-1">Jelajahi Katalog</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Calon penerima mencari dan memilih barang kebutuhan melalui fitur pencarian interaktif kami.</p>
            </div>

            <div class="text-center">
                <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center font-black text-lg mx-auto mb-4 border border-purple-100 shadow-sm">3</div>
                <h4 class="font-bold text-slate-900 text-sm mb-1">Hubungi Langsung</h4>
                <p class="text-xs text-slate-500 leading-relaxed">Penerima menekan tombol WhatsApp untuk berkomunikasi langsung dengan pemilik mengenai penyerahan barang.</p>
            </div>
        </div>
    </div>
</div>
@endsection