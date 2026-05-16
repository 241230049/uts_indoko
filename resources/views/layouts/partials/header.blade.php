<header class="bg-white/90 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 transition-all duration-300 shadow-sm shadow-slate-100/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 grid grid-cols-2 md:grid-cols-3 items-center">
        
        <div class="flex justify-start">
            <a href="{{ route('items.index') }}" class="flex items-center gap-2.5 font-bold text-xl text-blue-600 tracking-tight hover:opacity-90 transition-opacity">
                <div class="w-9 h-9 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center border border-blue-100 shadow-sm shadow-blue-50">
                    <i class="fa-solid fa-box-open text-base"></i>
                </div>
                <span class="text-lg">Lepas<span class="text-slate-900 font-medium">Pakai</span></span>
            </a>
        </div>
        
        <nav class="hidden md:flex items-center justify-center gap-8">
            <a href="{{ route('items.index') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors {{ request()->routeIs('items.index') ? 'text-blue-600 font-semibold' : '' }}">
                Beranda
            </a>
            <a href="{{ route('items.katalog') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors {{ request()->routeIs('items.katalog') ? 'text-blue-600 font-semibold' : '' }}">
                Katalog
            </a>
            <a href="{{ route('items.about') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors {{ request()->routeIs('items.about') ? 'text-blue-600 font-semibold' : '' }}">
                Tentang Kami
            </a>
        </nav>

        <div class="flex items-center justify-end gap-3">
    <a href="{{ route('items.katalog') }}" class="md:hidden p-2 text-slate-600 hover:text-blue-600 transition-colors" title="Katalog">
        <i class="fa-solid fa-magnifying-glass text-lg"></i>
    </a>

            <a href="{{ route('items.create') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold shadow-md shadow-blue-100 transition-all hover:-translate-y-0.5 active:translate-y-0">
                <i class="fa-solid fa-heart text-xs"></i>
                <span>Mulai Donasi</span>
            </a>
        </div>

    </div>
</header>