<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Portal Pemerintahan Kota Yogyakarta' }}</title>

    <meta name="description"
        content="{{ $description ?? 'Website resmi portal pemerintahan Kota Yogyakarta. Berisi informasi layanan publik, berita, dan pengumuman resmi.' }}">

    <meta name="keywords" content="Pemerintahan Kota Yogyakarta, Layanan Publik, Berita Yogyakarta, Pengumuman Resmi">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Portal Pemerintahan Kota Yogyakarta' }}">
    <meta property="og:description"
        content="{{ $description ?? 'Website resmi portal pemerintahan Kota Yogyakarta. Berisi informasi layanan publik, berita, dan pengumuman resmi.' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/images/proses-pembangunan.webp') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@yogyakartakota">
    <meta name="twitter:title" content="{{ $title ?? 'Portal Pemerintahan Kota Yogyakarta' }}">
    <meta name="twitter:description"
        content="{{ $description ?? 'Website resmi portal pemerintahan Kota Yogyakarta. Berisi informasi layanan publik, berita, dan pengumuman resmi.' }}">
    <meta name="twitter:image" content="{{ asset('images/proses-pembangunan.webp') }}">

    <meta property="article:published_time" content="2025-02-19T10:00:00+07:00">
    <meta property="article:modified_time" content="2025-02-20T14:30:00+07:00">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "GovernmentOrganization",
        "name": "Pemerintah Kota Yogyakarta",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "description": "Website resmi portal pemerintahan Kota Yogyakarta.",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-123-1234567",
            "contactType": "customer service"
        }
    }
    </script>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <x-navbar></x-navbar>

    <x-hero></x-hero>

    <main class="container-md">
        <div class="row justify-content-start px-3 px-md-0">
            <div class="col-xl-9 col-12">
                {{ $slot }}
            </div>
            <div class="col-xl-3 col-12">
                <x-aside></x-aside>
            </div>
        </div>
    </main>

    <x-footer></x-footer>
</body>

</html>
