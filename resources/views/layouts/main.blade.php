<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta property="og:title" content="Developers Conference 2025">
        <meta property="og:url" content="/">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en">
        <meta name="description" content="Developers Conference 2025 — the largest gathering of software craftsman, web devs, sysadmins, designers, testers and the younger generation of aspiring professionals.">
        <meta 
            property="og:description"
            content="Developers Conference 2025 — the largest gathering of software craftsman, web devs, sysadmins, designers, testers and the younger generation of aspiring professionals.">
        <meta name="keywords" content="Technology, Software Development, Linux, Open Source, Programming">
        <meta property="og:image" content="/images/meta-image.png">
        
        <title>{{ config('app.name', 'Developers Conference 2025') }}</title>

        <link rel="icon" type="image/png" href="favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bevan:ital@0;1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-H1NBF1RG65"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-H1NBF1RG65');
        </script>

        @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/scss/app.scss'])
    </head>
    <body>
        @include('layouts.top-navigation')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer')
    </body>
