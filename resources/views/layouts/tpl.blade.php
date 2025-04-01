<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:title" content="Developers Conference 2025">
    <meta property="og:url" content="/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en">
    <meta name="description" content="Beta version of Developers Conference 2025 website - currently in development.">
    <meta property="og:description"
        content="Beta version of Developers Conference 2025 website - currently in development.">
    <meta name="keywords" content="Technology">
    <meta property="og:image" content="/images/meta-image.png">

    <title>Developers Conference 2025</title>

    <link rel="icon" type="image/png" href="favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bevan:ital@0;1&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body>
    <main>
        {{-- @include('layouts.navigation') --}}
        @yield('content')
    </main>
</body>
