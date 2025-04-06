<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:title" content="Developers Conference 2025">
    <meta property="og:url" content="/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en">
    <meta name="description" content="Developers Conference 2025 — the largest gathering of software craftsman, web devs, sysadmins, designers, testers and the younger generation of aspiring professionals.">
    <meta property="og:description"
        content="Developers Conference 2025 — the largest gathering of software craftsman, web devs, sysadmins, designers, testers and the younger generation of aspiring professionals.">
    <meta name="keywords" content="Technology, Software Development, Linux, Open Source, Programming">
    <meta property="og:image" content="/images/meta-image.png">

    <title>Developers Conference 2025</title>

    <link rel="icon" type="image/png" href="favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bevan:ital@0;1&display=swap" rel="stylesheet">

{{--    <link href="/styles/style.css" rel="stylesheet" />--}}

    @vite('resources/css/app.css')
</head>

<body>
    <main>
        @yield('content')
    </main>

    <footer class="mt-10 pt-6 inset-0 z-0 bg-gradient-to-r from-[#9F00FF] to-[#00B0FF]">
        <div class="grid place-items-center">
            <img src="images/mscc-logo-inverted.svg" alt="MSCC logo" class="h-10 lg:h-14" />
        </div>
        <div class="mt-2 pb-6 text-center text-sm lg:text-xl text-white font-black">
            Mauritius Software Craftsmanship Community
        </div>
    </footer>

    <script src="./scripts/countdown.js"></script>
</body>
