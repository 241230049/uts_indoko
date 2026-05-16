@extends('app')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-950 tracking-tight">Jelajahi Barang Donasi</h1>
    <p class="text-sm text-slate-500 mt-1">Temukan berbagai barang layak pakai yang dibagikan oleh sobat donatur.</p>
</div>

<div class="bg-white border border-slate-200/80 rounded-2xl p-4 mb-8 shadow-sm">
    <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
        <div class="relative w-full md:w-96">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
            </span>
            <input type="text" id="cariBarang" placeholder="Cari barang donasi..." class="w-full pl-10 pr-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
        </div>

        <div class="flex flex-wrap gap-2 justify-start md:justify-end w-full md:w-auto">
            <button onclick="filterKategori('Semua')" class="btn-filter px-3.5 py-1.5 bg-blue-600 text-white rounded-xl text-xs font-semibold transition-all shadow-sm">Semua Barang</button>
            <button onclick="filterKategori('Pakaian')" class="btn-filter px-3.5 py-1.5 bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl text-xs font-semibold transition-all">Pakaian</button>
            <button onclick="filterKategori('Elektronik')" class="btn-filter px-3.5 py-1.5 bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl text-xs font-semibold transition-all">Elektronik</button>
            <button onclick="filterKategori('Buku & Pendidikan')" class="btn-filter px-3.5 py-1.5 bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl text-xs font-semibold transition-all">Buku</button>
            <button onclick="filterKategori('Peralatan Rumah')" class="btn-filter px-3.5 py-1.5 bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl text-xs font-semibold transition-all">Rumah Tangga</button>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="gridBarang">
    @forelse($campaigns as $item)
        <div class="kartu-barang bg-white border border-slate-200/60 rounded-2xl p-5 flex flex-col justify-between hover:border-blue-200 hover:shadow-xl hover:shadow-blue-50/20 transition-all duration-300 group" 
             data-nama="{{ strtolower($item->nama_barang) }}" 
             data-kategori="{{ $item->kategori }}">
            
            <div>
                <div class="flex items-center justify-between gap-2 mb-3.5">
                    <span class="px-2.5 py-1 bg-blue-50 text-blue-700 rounded-lg text-xs font-semibold uppercase">
                        {{ $item->kategori }}
                    </span>
                    <span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 rounded-lg text-xs font-semibold uppercase">
                        Kondisi: {{ $item->kondisi }}
                    </span>
                </div>

                <h3 class="text-lg font-bold text-slate-900 line-clamp-1 group-hover:text-blue-600 transition-colors">
                    {{ $item->nama_barang }}
                </h3>

                <p class="text-sm text-slate-500 mt-2 line-clamp-3 leading-relaxed">
                    {{ $item->deskripsi }}
                </p>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between gap-4">
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $item->kontak_pemilik) }}" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-emerald-800 hover:bg-emerald-900 transition-colors px-3 py-1.5 rounded-xl shadow-sm">
                    <i class="fa-brands fa-whatsapp text-sm text-emerald-200"></i>
                    <span>Hubungi Pemilik</span>
                </a>

                <div class="flex items-center gap-2">
                    <a href="{{ route('campaigns.edit', $item->id) }}" class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                        <i class="fa-solid fa-pen-to-square text-sm"></i>
                    </a>
                    
                    <form action="{{ route('campaigns.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin?')" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-all">
                            <i class="fa-solid fa-trash text-sm"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full bg-white border border-slate-200 border-dashed rounded-2xl p-12 text-center">
            <h3 class="text-sm font-semibold text-slate-900">Belum ada barang</h3>
        </div>
    @endforelse

    <div id="pencarianGagal" class="hidden col-span-full bg-white border border-slate-100 rounded-2xl p-12 text-center">
        <h3 class="text-sm font-semibold text-slate-900">Barang tidak ditemukan</h3>
    </div>
</div>

<script>
    const inputCari = document.getElementById('cariBarang');
    const kartuBarang = document.querySelectorAll('.kartu-barang');
    const gagalTeks = document.getElementById('pencarianGagal');
    let kategoriAktif = 'Semua';

    inputCari.addEventListener('input', () => { jalankanFilter(); });

    // Perbaikan deteksi teks tombol kategori agar pencarian JavaScript berjalan akurat
    function filterKategori(kategori) {
        kategoriAktif = kategori;
        const tombols = document.querySelectorAll('.btn-filter');
        tombols.forEach(btn => {
            if(btn.textContent.trim().includes(kategori === 'Semua' ? 'Semua' : kategori.split(' ')[0])) {
                btn.className = "btn-filter px-3.5 py-1.5 bg-blue-600 text-white rounded-xl text-xs font-semibold shadow-sm transition-all";
            } else {
                btn.className = "btn-filter px-3.5 py-1.5 bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 rounded-xl text-xs font-semibold transition-all";
            }
        });
        jalankanFilter();
    }

    function jalankanFilter() {
        const kataKunci = inputCari.value.toLowerCase();
        let barangTerlihat = 0;
        kartuBarang.forEach(kartu => {
            const namaBarang = kartu.getAttribute('data-nama');
            const kategoriBarang = kartu.getAttribute('data-kategori');
            
            // Mencocokkan teks atau kategori secara dinamis
            if (namaBarang.includes(kataKunci) && (kategoriAktif === 'Semua' || kategoriBarang === kategoriAktif)) {
                kartu.style.display = 'flex';
                barangTerlihat++;
            } else {
                kartu.style.display = 'none';
            }
        });
        if (barangTerlihat === 0 && kartuBarang.length > 0) { gagalTeks.classList.remove('hidden'); } 
        else { gagalTeks.classList.add('hidden'); }
    }
</script>
@endsection