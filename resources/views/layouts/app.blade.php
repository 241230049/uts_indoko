<!DOCTYPE html>
<html lang="id" class="h-full antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BagiBekas - Platform Berbagi Barang Layak Pakai</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-full font-sans">

    <!-- Header -->
    @include('layouts.partials.header')

    <!-- Konten Utama -->
    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-10 max-w-7xl">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.partials.footer')

</body>
</html>