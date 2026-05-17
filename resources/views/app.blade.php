<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LepasPakai - Berbagi Barang Layak Pakai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50/70 text-slate-900 antialiased selection:bg-blue-600 selection:text-white">

    @include('partials.header')

    <main class="relative min-h-screen">
        <div class="absolute top-20 left-1/2 -translate-x-1/2 w-full max-w-7xl h-[500px] bg-gradient-to-r from-blue-500/5 via-indigo-500/3 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
        
        <div class="container mx-auto">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')

</body>
</html>