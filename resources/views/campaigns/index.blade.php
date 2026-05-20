@extends('app')

@section('content')
<div class="space-y-28 pb-32 bg-slate-50/60 font-sans antialiased selection:bg-blue-600 selection:text-white">
    
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 pt-10">
        <div class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-950 text-white rounded-[2.5rem] p-8 sm:p-14 lg:p-20 shadow-2xl border border-slate-900 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-indigo-600/10 rounded-full blur-[100px] pointer-events-none"></div>

            <div class="space-y-6 lg:col-span-7 relative z-10">
                <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-[1.2]">Mungkin<br>
                    <span class="bg-gradient-to-r from-blue-400 via-indigo-300 to-slate-200 bg-clip-text text-transparent font-black">
                        Barang Tersisa Anda, <br> Jawaban Doa Mereka Hari Ini
                    </span>
                </h1>
                <p class="text-xs sm:text-base text-slate-300/90 max-w-xl leading-relaxed font-normal tracking-wide">
                    Sesuatu yang hanya berdebu di dalam lemari kita, bisa jadi adalah impian yang selama ini mereka langitkan dalam tangis. Mari longgarkan ruang hidup kita, untuk melapangkan lembar hidup sesama yang sedang berjuang di luar sana.
                </p>
            </div>

            <div class="lg:col-span-5 relative z-10 grid grid-cols-1 gap-4 sm:grid-cols-3 lg:grid-cols-1">
                <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-5 flex items-center gap-5 transition-all duration-300 hover:bg-white/10">
                    <div class="w-11 h-11 bg-blue-500/10 rounded-xl flex items-center justify-center text-blue-400 shrink-0 border border-blue-500/20">
                        <i class="fa-solid fa-box-open text-base"></i>
                    </div>
                    <div>
                        <p class="text-xl font-black text-white tracking-tight">1,240+</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-0.5">Aset Tersalurkan</p>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-5 flex items-center gap-5 transition-all duration-300 hover:bg-white/10">
                    <div class="w-11 h-11 bg-indigo-500/10 rounded-xl flex items-center justify-center text-indigo-400 shrink-0 border border-indigo-500/20">
                        <i class="fa-solid fa-user-check text-base"></i>
                    </div>
                    <div>
                        <p class="text-xl font-black text-white tracking-tight">580+</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-0.5">Donatur Terverifikasi</p>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-5 flex items-center gap-5 transition-all duration-300 hover:bg-white/10">
                    <div class="w-11 h-11 bg-slate-500/10 rounded-xl flex items-center justify-center text-slate-400 shrink-0 border border-slate-500/20">
                        <i class="fa-solid fa-handshake-angle text-base"></i>
                    </div>
                    <div>
                        <p class="text-xl font-black text-white tracking-tight">85+</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-0.5">Pemegang Amanah</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="alur-manfaat" class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        <div class="lg:col-span-4 lg:sticky lg:top-8 space-y-3">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block bg-blue-50 w-max px-3 py-1 rounded-full">Sistem Distribusi</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Mekanisme Penyaluran Kontribusi</h2>
            <p class="text-xs sm:text-sm text-slate-500 font-medium leading-relaxed">Tata kelola terstruktur demi menjaga akuntabilitas dan efektivitas penyerahan bantuan langsung dari kediaman Anda.</p>
        </div>

        <div class="lg:col-span-8 relative border-l-2 border-slate-200/80 pl-8 ml-4 lg:ml-0 space-y-12">
            <div class="relative group">
                <div class="absolute -left-[41px] top-1.5 w-4 h-4 rounded-full bg-slate-200 border-4 border-slate-50 group-hover:bg-blue-600 group-hover:border-blue-100 transition-all duration-300"></div>
                <div class="space-y-1.5">
                    <span class="text-[10px] font-bold text-blue-600 tracking-widest uppercase">Langkah 01</span>
                    <h3 class="text-base font-bold text-slate-900">Pencatatan & Manifestasi Barang</h3>
                    <p class="text-xs sm:text-sm text-slate-400 leading-relaxed font-medium max-w-xl">Daftarkan spesifikasi, nama barang, klaster kategori, serta deskripsi kondisi fisik aset Anda melalui formulir digital secara transparan.</p>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute -left-[41px] top-1.5 w-4 h-4 rounded-full bg-slate-200 border-4 border-slate-50 group-hover:bg-blue-600 group-hover:border-blue-100 transition-all duration-300"></div>
                <div class="space-y-1.5">
                    <span class="text-[10px] font-bold text-blue-600 tracking-widest uppercase">Langkah 02</span>
                    <h3 class="text-base font-bold text-slate-900">Validasi Administratif</h3>
                    <p class="text-xs sm:text-sm text-slate-400 leading-relaxed font-medium max-w-xl">Tim internal melakukan proses verifikasi data kelayakan barang untuk mempersiapkan integrasi kontak langsung antara donatur dan penerima.</p>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute -left-[41px] top-1.5 w-4 h-4 rounded-full bg-slate-200 border-4 border-slate-50 group-hover:bg-blue-600 group-hover:border-blue-100 transition-all duration-300"></div>
                <div class="space-y-1.5">
                    <span class="text-[10px] font-bold text-blue-600 tracking-widest uppercase">Langkah 03</span>
                    <h3 class="text-base font-bold text-slate-900">Konsolidasi Transparansi</h3>
                    <p class="text-xs sm:text-sm text-slate-400 leading-relaxed font-medium max-w-xl">Aset yang dipublikasikan siap diakses secara langsung oleh yayasan sosial, panti asuhan, atau masyarakat yang membutuhkan ketepatan bantuan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 space-y-10">
        <div class="space-y-1 text-center md:text-left">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block">Klaster Komoditas</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Kategori Utama Logistik</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-5">
            <div class="bg-white border border-slate-200/70 rounded-2xl p-5 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:shadow-slate-200/40 hover:border-blue-500 group">
                <div class="w-9 h-9 bg-slate-50 text-slate-500 rounded-xl flex items-center justify-center border border-slate-100 group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors duration-300">
                    <i class="fa-solid fa-shirt text-xs"></i>
                </div>
                <div class="mt-6 space-y-1">
                    <h3 class="text-xs font-bold tracking-wide text-slate-900 uppercase">Pakaian / Sandang</h3>
                    <p class="text-[11px] text-slate-400 font-medium leading-normal">Pakaian harian, selimut, and sandang layak.</p>
                </div>
            </div>

            <div class="bg-white border border-slate-200/70 rounded-2xl p-5 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:shadow-slate-200/40 hover:border-blue-500 group">
                <div class="w-9 h-9 bg-slate-50 text-slate-500 rounded-xl flex items-center justify-center border border-slate-100 group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors duration-300">
                    <i class="fa-solid fa-plug text-xs"></i>
                </div>
                <div class="mt-6 space-y-1">
                    <h3 class="text-xs font-bold tracking-wide text-slate-900 uppercase">Elektronik / Gadget</h3>
                    <p class="text-[11px] text-slate-400 font-medium leading-normal">Mesin cuci, gawai belajar, dan perangkat rumah.</p>
                </div>
            </div>

            <div class="bg-white border border-slate-200/70 rounded-2xl p-5 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:shadow-slate-200/40 hover:border-blue-500 group">
                <div class="w-9 h-9 bg-slate-50 text-slate-500 rounded-xl flex items-center justify-center border border-slate-100 group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors duration-300">
                    <i class="fa-solid fa-book text-xs"></i>
                </div>
                <div class="mt-6 space-y-1">
                    <h3 class="text-xs font-bold tracking-wide text-slate-900 uppercase">Buku & Alat Tulis</h3>
                    <p class="text-[11px] text-slate-400 font-medium leading-normal">Buku acuan sekolah, modul, dan media ajar.</p>
                </div>
            </div>

            <div class="bg-white border border-slate-200/70 rounded-2xl p-5 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:shadow-slate-200/40 hover:border-blue-500 group">
                <div class="w-9 h-9 bg-slate-50 text-slate-500 rounded-xl flex items-center justify-center border border-slate-100 group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors duration-300">
                    <i class="fa-solid fa-house-laptop text-xs"></i>
                </div>
                <div class="mt-6 space-y-1">
                    <h3 class="text-xs font-bold tracking-wide text-slate-900 uppercase">Rumah Tangga</h3>
                    <p class="text-[11px] text-slate-400 font-medium leading-normal">Kompor gas, alat dapur, dan utilitas domestik.</p>
                </div>
            </div>

            <div class="bg-white border border-slate-200/70 rounded-2xl p-5 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:shadow-slate-200/40 hover:border-blue-500 group">
                <div class="w-9 h-9 bg-slate-50 text-slate-500 rounded-xl flex items-center justify-center border border-slate-100 group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors duration-300">
                    <i class="fa-solid fa-gamepad text-xs"></i>
                </div>
                <div class="mt-6 space-y-1">
                    <h3 class="text-xs font-bold tracking-wide text-slate-900 uppercase">Mainan & Hobi</h3>
                    <p class="text-[11px] text-slate-400 font-medium leading-normal">Mainan edukasi anak dan instrumen kreatifitas.</p>
                </div>
            </div>

            <div class="bg-white border border-slate-200/70 rounded-2xl p-5 flex flex-col justify-between transition-all duration-300 hover:shadow-lg hover:shadow-slate-200/40 hover:border-blue-500 group">
                <div class="w-9 h-9 bg-slate-50 text-slate-500 rounded-xl flex items-center justify-center border border-slate-100 group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors duration-300">
                    <i class="fa-solid fa-cubes text-xs"></i>
                </div>
                <div class="mt-6 space-y-1">
                    <h3 class="text-xs font-bold tracking-wide text-slate-900 uppercase">Lain-lain</h3>
                    <p class="text-[11px] text-slate-400 font-medium leading-normal">Kebutuhan logistik umum di luar klaster utama.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 space-y-8">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
            <div class="space-y-1">
                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block">Etalase Publik</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Barang Donasi Tersedia</h2>
            </div>
            <a href="{{ route('katalog') }}" class="text-xs font-bold text-blue-600 hover:text-blue-700 transition-colors bg-blue-50 px-4 py-2 rounded-xl">
                Jelajahi Katalog
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($campaigns as $item)
                <div class="bg-white border border-slate-200/70 rounded-2xl p-6 flex flex-col justify-between hover:border-blue-400 hover:shadow-xl hover:shadow-slate-200/30 transition-all duration-300 group min-h-[250px]">
                    <div>
                        <div class="flex items-center justify-between gap-2 mb-4">
                            <span class="px-2.5 py-1 bg-blue-50 text-blue-700 rounded-lg text-[10px] font-bold uppercase tracking-wider">{{ $item->kategori }}</span>
                            <span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 rounded-lg text-[10px] font-bold uppercase tracking-wider">Kondisi: {{ $item->kondisi }}</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 line-clamp-1 group-hover:text-blue-600 transition-colors">{{ $item->nama_barang }}</h3>
                        <p class="text-xs text-slate-500 mt-2.5 line-clamp-3 leading-relaxed min-h-[54px]">{{ $item->deskripsi }}</p>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between gap-4">
                        <div class="inline-flex items-center gap-2 text-xs font-semibold text-slate-700 bg-slate-100 px-3 py-2 rounded-xl border border-slate-200/60 select-all" title="Klik 3x atau tahan untuk menyalin nomor">
                            <i class="fa-solid fa-phone text-[11px] text-slate-400"></i>
                            <span>{{ $item->kontak_pemilik }}</span>
                        </div>
                        
                        <div class="flex items-center gap-1.5">
                            <a href="{{ route('campaigns.edit', $item->id) }}" class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all"><i class="fa-solid fa-pen-to-square text-sm"></i></a>
                            <form action="{{ route('campaigns.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin?')" class="inline">@csrf @method('DELETE')<button type="submit" class="p-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-all"><i class="fa-solid fa-trash text-sm"></i></button></form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white border border-slate-200 border-dashed rounded-2xl p-12 text-center">
                    <i class="fa-solid fa-box-open text-slate-300 text-3xl mb-2 block"></i>
                    <h3 class="text-xs font-semibold text-slate-800">Belum ada barang donasi yang didaftarkan saat ini.</h3>
                </div>
            @endforelse
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-5 sm:px-5 lg:px-10">
        <div class="bg-slate-950 text-white rounded-[2rem] p-10 sm:p-16 text-center space-y-6 shadow-xl border border-white/5 relative overflow-hidden">
            <div class="absolute -top-1/2 -left-1/2 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-[120px] pointer-events-none"></div>
            
            <div class="max-w-2xl mx-auto space-y-4 relative z-10">
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight leading-tight">
                    Satu Langkah Kecil, Harapan Baru Bagi Mereka
                </h2>
                <p class="text-slate-400 text-xs sm:text-sm max-w-md mx-auto leading-relaxed font-normal">
                    Barang yang mungkin terlupakan di sudut rumah Anda, bisa jadi adalah jawaban dari untaian doa mereka hari ini. Salurkan kepedulian Anda menjadi berkah nyata yang terus mengalir..
                </p>
            </div>
            
            <div class="pt-4 relative z-10">
                <a href="{{ route('campaigns.create') }}" class="inline-flex items-center px-8 py-4 bg-white text-slate-950 font-bold text-xs uppercase tracking-widest rounded-xl shadow-md transition-all duration-300 hover:bg-slate-100 hover:scale-[1.02]">
                    Registrasikan Kontribusi Anda
                </a>
            </div>
        </div>
    </div>

</div>
@endsection