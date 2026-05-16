<nav class="bg-white border-b border-slate-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            
            <div class="flex items-center">
                <a href="{{ route('campaigns.index') }}" class="flex items-center gap-2">
                    <div class="w-9 h-9 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-md shadow-blue-500/20">
                        <i class="fa-solid fa-hand-holding-heart text-lg"></i>
                    </div>
                    <span class="text-lg font-black text-slate-900 tracking-tight">Lepas<span class="text-blue-600">Pakai</span></span>
                </a>
            </div>

            <div class="flex items-center gap-8">
                <div class="hidden md:flex items-center gap-6">
                    <a href="{{ route('campaigns.index') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors">Beranda</a>
                    <a href="{{ route('katalog') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors">Katalog</a>
                    <a href="{{ route('about') }}" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors">Tentang Kami</a>
                </div>

                <a href="{{ route('campaigns.create') }}" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-blue-600 hover:bg-blue-700 transition-colors px-4 py-2.5 rounded-xl shadow-sm shadow-blue-500/10">
                    <i class="fa-solid fa-plus text-xs"></i>
                    <span>Mulai Donasi</span>
                </a>
            </div>

        </div>
    </div>
</nav>