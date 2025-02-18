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
    <x-navbar></x-navbar>

    <x-hero></x-hero>

    <main class="container">
        <div class="row justify-content-start">
            <div class="col-9">
                {{ $slot }}
            </div>
            <div class="col-3">
                <x-aside></x-aside>
            </div>
        </div>
    </main>

    <x-footer></x-footer>
</body>

</html>
