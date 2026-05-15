<nav class="bg-white/95 border-b border-slate-100 sticky top-0 z-50 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <!-- Logo / Brand -->
            <div class="flex items-center">
                <a href="{{ route('items.index') }}" class="flex items-center space-x-2 group">
                    <span class="text-xl font-bold tracking-tight text-slate-900 group-hover:text-emerald-600 transition-colors">
                        BagiBekas
                    </span>
                </a>
            </div>

            <!-- Navigasi Tengah -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('items.index') }}" class="text-sm font-medium {{ request()->is('/') ? 'text-emerald-600 border-b-2 border-emerald-600' : 'text-slate-500 hover:text-slate-900' }} px-1 py-5">
                    Jelajahi Barang
                </a>
                <a href="{{ route('tentang') }}" class="text-sm font-medium {{ request()->routeIs('tentang') ? 'text-emerald-600 border-b-2 border-emerald-600' : 'text-slate-500 hover:text-slate-900' }} px-1 py-5">
                    Tentang Kami
                </a>
                <a href="{{ route('panduan') }}" class="text-sm font-medium {{ request()->routeIs('panduan') ? 'text-emerald-600 border-b-2 border-emerald-600' : 'text-slate-500 hover:text-slate-900' }} px-1 py-5">
                    Panduan Berbagi
                </a>
            </div>

            <!-- Tombol Aksi (Tanda Panah Sudah Dihapus) -->
            <div class="flex items-center">
                <a href="{{ route('items.create') }}" class="inline-flex items-center justify-center px-4 py-2.5 text-sm font-semibold text-white bg-emerald-600 hover:bg-emerald-700 rounded-lg shadow-sm hover:shadow transition-all duration-200">
                    <span>Bagikan Barang</span>
                </a>
            </div>
            
        </div>
    </div>
</nav>