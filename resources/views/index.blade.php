@extends('layouts.main')

@section('content')
    <section class="relative shadow-lg">
        <div class="inset-0 z-0 bg-gradient-to-r from-[#9F00FF] to-[#00B0FF]">
            <div class="">
                <img src="/images/hero-emojis.png" class="w-full h-auto shadow-lg" />
            </div>
        </div>

        <!-- Overlay buttons -->
        <div class="absolute top-6 left-1/2 transform -translate-x-1/2 space-x-4 hidden lg:block">
            <div class="flex space-x-4">
                <a
                    href="#agenda"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition"
                >
                    Agenda
                </a>
                <a
                    href="#register"
                    class="px-4 py-2 bg-orange-500 text-white rounded-lg shadow hover:bg-orange-600 transition"
                >
                    Register
                </a>

                <ul class="ml-10 flex flex-row items-center space-x-4">
                    <li>
                        <a href="https://www.facebook.com/MauritiusSoftwareCraftsmanshipCommunity" title="Facebook"
                           target="_blank">
                            <svg role="img" class="h-6 w-6 fill-white" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg"><title>Facebook</title>
                                <path
                                    d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/mscc_mauritius/" title="Instagram" target="_blank">
                            <svg role="img" class="h-6 w-6 fill-white" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg"><title>Instagram</title>
                                <path
                                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/MSCraftsman" title="X" target="_blank">
                            <svg role="img" class="h-6 w-6 fill-white" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg"><title>X</title>
                                <path
                                    d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/groups/5033639/" title="LinkedIn" target="_blank">
                            <svg role="img" class="h-6 w-6 fill-white" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title>
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/mscraftsman" title="GitHub" target="_blank">
                            <svg role="img" class="h-6 w-6 fill-white" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg"><title>GitHub</title>
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="absolute top-6 lg:top-1/5 left-1/2 transform -translate-x-1/2">
            <img src="/images/hero-mscc-logo.png" alt="MSCC Logo" class="mx-auto mb-2 lg:mb-4 w-[100px] lg:w-[250px]" />
            <img src="/images/hero-devcon.png" alt="MSCC Logo" class="w-[175px] lg:w-[650px]" />
            <h2 class="font-devcon text-md lg:text-3xl text-center text-white">24, 25 & 26 July 2025</h2>
            <p class="font-devcon text-sm lg:text-3xl text-center text-white">Voilà Hotel, Bagatelle</p>
        </div>

    </section>

    {{--  Sponsors & Partners  --}}
    <section class="hidden">
        <div class="mt-6 text-4xl text-center font-black">Sponsors & Partners</div>

        <div class="mt-6 text-3xl text-center font-black">Gold</div>
        <div class="mt-4 max-w-4xl mx-auto grid place-items-center">
            <img src="/images/sponsors/publicis.png" alt="Publicis Global Delivery" class="h-[120px]" />
        </div>

        <div class="mt-6 text-3xl text-center font-black">Bronze</div>
        <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center gap-8">
            <img src="/images/sponsors/clarity.png" alt="Clarity" class="h-[50px]" />
            <img src="/images/sponsors/cloudsure.png" alt="Cloudsure" class="h-[100px]" />
        </div>

        <div class="mt-6 text-3xl text-center font-black">Lanyard & Badge</div>
        <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center gap-8">
            <img src="/images/sponsors/cloud.mu.png" alt="cloud.mu" class="h-[100px]" />
        </div>

        <div class="mt-6 text-3xl text-center font-black">Internet</div>
        <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center gap-8">
            <img src="/images/sponsors/kaldera.png" alt="Kaldera" class="h-[50px]" />
        </div>

        <div class="mt-6 text-3xl text-center font-black">Giveaways</div>
        <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center gap-8">
            <img src="/images/sponsors/novity.png" alt="Novity" class="h-[80px]" />
        </div>

        <div class="mt-6 text-3xl text-center font-black">Website Hosting</div>
        <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center gap-8">
            <img src="/images/sponsors/cloud.mu.png" alt="cloud.mu" class="h-[100px]" />
        </div>
    </section>

    <section class="mt-4 lg:mt-8">
        <div class="flex flex-col lg:flex-row gap-6 max-w-7xl mx-auto p-6">
            <div class="lg:w-[600px]">
                <h2 class="text-3xl font-black font-devcon">Sponsors & Partners</h2>
                <p class="mt-2 font-medium">
                    We extend our heartfelt gratitude to all our sponsors and partners for their
                    unwavering support and commitment to the Developers Conference. Thank you for
                    believing in our mission and standing with us.
                </p>
            </div>
            <div class="w-full lg:border-l-1 lg:border-gray-200 lg:pl-6">
                <div class="text-3xl font-black font-devcon flex items-center justify-center lg:justify-normal gap-2">Gold
                    <span><img src="/images/emojis/gold.svg" class="h-10"></span>
                </div>
                <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center lg:justify-normal gap-8">
                    <img src="/images/sponsors/publicis.png" alt="Publicis Global Delivery" class="h-[100px]" />
                </div>

                <div class="mt-6 text-3xl font-black font-devcon flex items-center justify-center lg:justify-normal gap-2">Bronze
                    <span><img src="/images/emojis/bronze.svg" class="h-10"></span>
                </div>
                <div class="mt-4 lg:mt-4 max-w-4xl mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-normal gap-4 lg:gap-8">
                    <img src="/images/sponsors/clarity.png" alt="Clarity" class="h-[40px]" />
                    <img src="/images/sponsors/cloudsure.png" alt="Cloudsure" class="h-[80px]" />
                </div>

                <div class="mt-6 grid grid-col-1 lg:grid-cols-3 place-items-center lg:place-items-start">
                    <div>
                        <div class="mt-6 text-xl font-black font-devcon text-center lg:text-left">Lanyard & Badge</div>
                        <div class="mt-4 max-w-4xl mx-auto flex justify-center gap-8">
                            <img src="/images/sponsors/cloud.mu.png" alt="cloud.mu" class="h-[80px]" />
                        </div>
                    </div>
                    <div>
                        <div class="mt-6 text-xl font-black font-devcon text-center lg:text-left">Giveaways</div>
                        <div class="mt-4 max-w-4xl mx-auto flex justify-center gap-8">
                            <img src="/images/sponsors/novity.png" alt="Novity" class="h-[70px]" />
                        </div>
                    </div>
                    <div>
                        <div class="mt-6 text-xl font-black font-devcon text-center lg:text-left">Internet</div>
                        <div class="mt-4 max-w-4xl mx-auto flex justify-center gap-8">
                            <img src="/images/sponsors/kaldera.png" alt="Kaldera" class="h-[50px]" />
                        </div>
                    </div>
                    <div>
                        <div class="mt-6 text-xl font-black font-devcon text-center lg:text-left">Website Hosting</div>
                        <div class="mt-4 max-w-4xl mx-auto flex justify-center gap-8">
                            <img src="/images/sponsors/cloud.mu.png" alt="cloud.mu" class="h-[80px]" />
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <script src="/scripts/countdown.js"></script>
@endsection
