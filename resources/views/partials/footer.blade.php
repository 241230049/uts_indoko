<footer class="bg-white border-t border-slate-100 mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-slate-400">
                &copy; {{ date('Y') }} LepasPakai. Hak Cipta Dilindungi. Proyek Praktikum Web.
            </p>
            
            <div class="flex items-center gap-6">
                <a href="{{ route('campaigns.index') }}" class="text-xs text-slate-400 hover:text-slate-600 transition-colors">Beranda</a>
                <a href="{{ route('katalog') }}" class="text-xs text-slate-400 hover:text-slate-600 transition-colors">Katalog</a>
                <a href="{{ route('about') }}" class="text-xs text-slate-400 hover:text-slate-600 transition-colors">Tentang Kami</a>
            </div>
        </div>
    </div>
</footer>