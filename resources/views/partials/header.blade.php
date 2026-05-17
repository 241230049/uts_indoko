<nav class="bg-white border-b border-slate-100 sticky top-0 z-50 backdrop-blur-md bg-white/90 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <div class="flex items-center">
                <a href="{{ route('campaigns.index') }}" class="flex items-center gap-2.5 group">
                    <div class="w-9 h-9 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-md shadow-blue-500/20 group-hover:bg-blue-700 transition-all duration-300 transform group-hover:rotate-3">
                        <i class="fa-solid fa-hand-holding-heart text-sm"></i>
                    </div>
                    <span class="text-base font-black text-slate-900 tracking-tight">Lepas<span class="text-blue-600">Pakai</span></span>
                </a>
            </div>

            <div class="flex items-center gap-8">
                <div class="hidden md:flex items-center gap-7">
                    <a href="{{ route('campaigns.index') }}" class="text-[13px] font-semibold text-slate-600 hover:text-blue-600 transition-colors">Beranda</a>
                    <a href="{{ route('katalog') }}" class="text-[13px] font-semibold text-slate-600 hover:text-blue-600 transition-colors">Katalog</a>
                    <a href="{{ route('about') }}" class="text-[13px] font-semibold text-slate-600 hover:text-blue-600 transition-colors">Tentang Kami</a>
                </div>

                <a href="{{ route('campaigns.create') }}" class="inline-flex items-center text-xs font-bold text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300 px-5 py-2.5 rounded-xl shadow-md shadow-blue-500/10 hover:shadow-blue-500/20 transform hover:-translate-y-0.5">
                    <span>Mulai Donasi</span>
                </a>
            </div>

        </div>
    </div>
</nav>