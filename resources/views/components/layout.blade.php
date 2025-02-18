<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="bg-dark text-white d-flex flex-column justify-content-center">
        <div class="bg-white">
            <h1 class="text-black text-center fs-3 m-0">Pemerintah Kota Yogyakarta</h1>
        </div>
        <nav class="nav d-flex justify-content-center">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-white" href="#home">Beranda</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#tentang">profil</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#informasi">informasi</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#layanan">layanan</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#berita">berita</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#direktori">direktori</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#kontak">kontak</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#bantuan">bantuan</a></li>
            </ul>
        </nav>
    </header>

    <main class="container my-5">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Pemerintah Kota Yogyakarta</p>
    </footer>
</body>

</html>
