@extends('layouts.app')

@section('content')
<div class="text-center max-w-4xl mx-auto mb-12">
    <h1 class="text-2xl font-extrabold text-slate-950 tracking-tight sm:text-4xl whitespace-nowrap">
        Salurkan Barang Bekas Layak Pakai Anda
    </h1>
    <p class="mt-3 text-base text-slate-500 max-w-2xl mx-auto leading-relaxed">
        Bantu sesama dengan mendonasikan barang, pakaian, buku, atau elektronik yang sudah tidak Anda gunakan namun masih berfungsi dengan baik.
    </p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($items as $item)
        <div class="bg-white border border-slate-200/60 rounded-2xl p-5 flex flex-col justify-between hover:border-blue-200 hover:shadow-xl hover:shadow-blue-50/20 transition-all duration-300 group">
            <div>
                <div class="flex items-center gap-2 mb-3.5">
                    <span class="px-2.5 py-1 bg-blue-50 text-blue-700 rounded-lg text-xs font-semibold tracking-wide uppercase">
                        {{ $item->kategori }}
                    </span>
                    <span class="px-2.5 py-1 bg-amber-50 text-amber-700 rounded-lg text-xs font-semibold tracking-wide uppercase">
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
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $item->kontak_pemilik) }}" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-600 hover:text-emerald-700 transition-colors bg-emerald-50 px-3 py-1.5 rounded-xl">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>Hubungi Pemilik</span>
                </a>

                <div class="flex items-center gap-2">
                    <a href="{{ route('items.edit', $item->id) }}" class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all" title="Edit Data">
                        <i class="fa-solid fa-pen-to-square text-sm"></i>
                    </a>
                    
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang donasi ini?')" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-all" title="Hapus Data">
                            <i class="fa-solid fa-trash text-sm"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full bg-white border border-slate-200 border-dashed rounded-2xl p-12 text-center">
            <div class="w-12 h-12 bg-slate-50 text-slate-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-box-open text-xl"></i>
            </div>
            <h3 class="text-sm font-semibold text-slate-900">Belum ada barang donasi</h3>
            <p class="text-xs text-slate-500 mt-1">Jadilah orang pertama yang membagikan barang layak pakai Anda.</p>
            <a href="{{ route('items.create') }}" class="mt-4 inline-flex items-center gap-2 text-xs font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                Bagikan Sekarang &rarr;
            </a>
        </div>
    @endforelse
</div>
@endsection