<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:title" content="Calcium">
    <meta property="og:url" content="/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en">
    <meta name="description" content="Beta version of Developers Conference 2025 website - currently in development.">
    <meta property="og:description"
        content="Beta version of Developers Conference 2025 website - currently in development.">
    <meta name="keywords" content="Technology">
    <meta property="og:image" content="/images/meta-image.png">

    <title>Calcium</title>
    <!-- <base href="/" /> -->

    <link rel="icon" type="image/png" href="favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    <main id="app">
        <nav class="navigation">
            <div class="container">
                <div class="brand">
                    <a href="/">
                        <img src="/images/brand.svg" alt="MSCC Developers Conference 2025 (Mauritius)" />
                    </a>
                </div>

                <section class="social">
                    <ul class="links">
                        <li>
                            <a class="button small icon secondary-400" href="https://www.facebook.com/MauritiusSoftwareCraftsmanshipCommunity" title="Facebook" target="_blank">
                                <svg class="svg" fill="currentColor" width="100%" height="100%" viewBox="0 0 32 32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="button small icon secondary-400" href="https://www.instagram.com/mscc_mauritius/" title="Instagram" target="_blank">
                                <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM12 15.88C9.86 15.88 8.12 14.14 8.12 12C8.12 9.86 9.86 8.12 12 8.12C14.14 8.12 15.88 9.86 15.88 12C15.88 14.14 14.14 15.88 12 15.88ZM17.92 6.88C17.87 7 17.8 7.11 17.71 7.21C17.61 7.3 17.5 7.37 17.38 7.42C17.26 7.47 17.13 7.5 17 7.5C16.73 7.5 16.48 7.4 16.29 7.21C16.2 7.11 16.13 7 16.08 6.88C16.03 6.76 16 6.63 16 6.5C16 6.37 16.03 6.24 16.08 6.12C16.13 5.99 16.2 5.89 16.29 5.79C16.52 5.56 16.87 5.45 17.19 5.52C17.26 5.53 17.32 5.55 17.38 5.58C17.44 5.6 17.5 5.63 17.56 5.67C17.61 5.7 17.66 5.75 17.71 5.79C17.8 5.89 17.87 5.99 17.92 6.12C17.97 6.24 18 6.37 18 6.5C18 6.63 17.97 6.76 17.92 6.88Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="button small icon secondary-400" href="https://www.linkedin.com/company/mscraftsman/" title="LinkedIn" target="_blank">
                                <svg fill="currentColor" width="100%" height="100%" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 6h4v13H1V6zm2-5C1.8 1 1 2 1 3.1 1 4.1 1.8 5 3 5c1.3 0 2-.9 2-2s-.8-2-2-2zm11.6 5.2c-2.1 0-3.3 1.2-3.8 2h-.1l-.2-1.7H6.9c0 1.1.1 2.4.1 3.9V19h4v-7.1c0-.4 0-.7.1-1 .3-.7.8-1.6 1.9-1.6 1.4 0 2 1.2 2 2.8V19h4v-7.4c0-3.7-1.9-5.4-4.4-5.4z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="button small icon secondary-400" href="https://x.com/MSCraftsman"
                                title="X (Formerly Twitter)" target="_blank">
                                <svg fill="currentColor" width="100%" height="100%" role="img" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="button small icon secondary-400" href="https://github.com/mscraftsman" title="Github" target="_blank">
                                <svg fill="currentColor" width="100%" height="100%" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.18 11.309c-.718 0-1.3.807-1.3 1.799 0 .994.582 1.801 1.3 1.801s1.3-.807 1.3-1.801c-.001-.992-.582-1.799-1.3-1.799zm4.526-4.683c.149-.365.155-2.439-.635-4.426 0 0-1.811.199-4.551 2.08-.575-.16-1.548-.238-2.519-.238-.973 0-1.945.078-2.52.238C4.74 2.399 2.929 2.2 2.929 2.2c-.789 1.987-.781 4.061-.634 4.426C1.367 7.634.8 8.845.8 10.497c0 7.186 5.963 7.301 7.467 7.301l1.734.002 1.732-.002c1.506 0 7.467-.115 7.467-7.301 0-1.652-.566-2.863-1.494-3.871zm-7.678 10.289h-.056c-3.771 0-6.709-.449-6.709-4.115 0-.879.31-1.693 1.047-2.369C5.537 9.304 7.615 9.9 9.972 9.9h.056c2.357 0 4.436-.596 5.664.531.735.676 1.045 1.49 1.045 2.369 0 3.666-2.937 4.115-6.709 4.115zm-3.207-5.606c-.718 0-1.3.807-1.3 1.799 0 .994.582 1.801 1.3 1.801.719 0 1.301-.807 1.301-1.801 0-.992-.582-1.799-1.301-1.799z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </nav>

        @yield('content')

            <footer class="site-footer">
                <p data-easter-egg>MSCC — DEVELOPERS CONFERENCE 2025</p>
            </footer>
    </main>
</body>

</html>
