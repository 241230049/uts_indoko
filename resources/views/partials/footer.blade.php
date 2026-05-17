<footer class="bg-white border-t border-slate-100 mt-36">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8">
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 pb-12 border-b border-slate-100">
            
            <div class="md:col-span-2 space-y-4">
                <a href="{{ route('campaigns.index') }}" class="flex items-center gap-2.5 group w-fit">
                    <div class="w-8 h-8 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-md shadow-blue-500/20 group-hover:bg-blue-700 transition-all duration-500 transform group-hover:rotate-6">
                        <i class="fa-solid fa-hand-holding-heart text-sm"></i>
                    </div>
                    <span class="text-base font-black text-slate-900 tracking-tight">Lepas<span class="text-blue-600">Pakai</span></span>
                </a>
                <p class="text-xs text-slate-500 leading-relaxed max-w-sm">
                    Platform praktikum berbagi barang layak pakai untuk mendukung sirkulasi barang bekas yang lebih bermanfaat bagi sesama.
                </p>
            </div>
            <div class="space-y-3">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Aplikasi</h4>
                <ul class="space-y-2.5 text-xs font-medium text-slate-500">
                    <li>
                        <a href="{{ route('campaigns.index') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('katalog') }}" class="hover:text-blue-600 transition-colors">Jelajahi</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-blue-600 transition-colors">Tentang Kami</a>
                    </li>
                </ul>
            </div>

            <div class="space-y-3">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Bantuan</h4>
                <ul class="space-y-2.5 text-xs font-medium text-slate-500">
                    <li>
                        <a href="mailto:support@lepaspakai.test" class="hover:text-blue-600 transition-colors inline-flex items-center gap-1.5">
                            <i class="fa-regular fa-envelope text-slate-400"></i> support@lepaspakai.test
                        </a>
                    </li>
                    <li class="text-slate-400 font-normal text-[11px] italic">
                        Lab Komputer Terpadu TI
                    </li>
                </ul>
            </div>

        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-8 text-[11px] text-slate-400">
            <p class="font-medium tracking-wide">
                &copy; {{ date('Y') }} <span class="text-slate-600 font-semibold">LepasPakai</span>. Hak Cipta Dilindungi.
            </p>
            <div class="flex items-center gap-2 bg-slate-50 border border-slate-200/40 px-3 py-1 rounded-full">
                <span class="w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Proyek UTS Praktikum Web</span>
            </div>
        </div>

    </div>
</footer>