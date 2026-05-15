<footer class="bg-white border-t border-slate-100 py-8 mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            
            <!-- Sisi Kiri: Brand & Hak Cipta -->
            <div class="space-y-1 text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start space-x-2">
                    <div class="h-5 w-5 rounded bg-emerald-600 flex items-center justify-center font-bold text-white text-[10px]">
                        BB
                    </div>
                    <span class="text-sm font-bold tracking-tight text-slate-900">BagiBekas</span>
                </div>
                <p class="text-xs text-slate-500">&copy; {{ date('Y') }} BagiBekas. Platform berbagi barang layak pakai.</p>
            </div>

            <!-- Sisi Tengah/Kanan: Menu Navigasi Ringkas -->
            <div class="flex flex-wrap justify-center gap-x-8 gap-y-2 text-xs font-medium text-slate-500">
                <a href="{{ route('items.index') }}" class="hover:text-emerald-600 transition-colors">Semua Barang</a>
                <a href="{{ route('items.create') }}" class="hover:text-emerald-600 transition-colors">Bagikan Barang</a>
                <a href="#" class="hover:text-emerald-600 transition-colors">Tentang Kami</a>
                <a href="#" class="hover:text-emerald-600 transition-colors">Kontak</a>
            </div>

            <!-- Sisi Kanan: Status/Slogan -->
            <div class="hidden lg:block text-right">
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-slate-50 text-slate-600 border border-slate-200">
                    Mendukung Gaya Hidup Sirkular
                </span>
            </div>

        </div>
    </div>
</footer>