@extends('layouts.tpl')

@section('content')
    <section class="">
        <section>
            <div class="relative">
                <img
                    src="/images/hero.svg"
                    class=""
                    alt="MSCC Developers Conference 2025 / Hero image"
                />
                <!-- Overlay buttons -->
                <div class="absolute top-6 left-1/2 transform -translate-x-1/2 space-x-4">
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
                                <a href="https://www.facebook.com/MauritiusSoftwareCraftsmanshipCommunity"
                                   title="Facebook"
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
            </div>
        </section>

        <section data-layout="section-with-title">
            <div class="title-box">
                <h3 class="title">Let's have a blast!</h3>
                <p class="caption">Our community and team absolutely loved the energy in the last conference. We are
                    looking forward to your participation in the next one!</p>
            </div>

            <div class="content-box">
                <div class="metrics-items">
                    <div class="item">
                    <span class="animated-emoji zoom-in-zoom-out" data-emoji-size="40">
                        <img
                            src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/Smilies/Partying Face.png"
                            alt="Animated Emoji">
                    </span>
                        <h2 class="title">1600+</h2>
                        <p class="caption">Attendees</p>
                    </div>
                    <div class="item">
                    <span class="animated-emoji zoom-in-zoom-out" data-emoji-size="40">
                        <img
                            src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/People with professions/Technologist Medium Skin Tone.png"
                            alt="Animated Emoji">
                    </span>
                        <h2 class="title">80+</h2>
                        <p class="caption">Speakers</p>
                    </div>
                    <div class="item">
                    <span class="animated-emoji zoom-in-zoom-out" data-emoji-size="40">
                        <img
                            src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/Travel and places/Rocket.png"
                            alt="Animated Emoji">
                    </span>
                        <h2 class="title">70+</h2>
                        <p class="caption">Sessions</p>
                    </div>
                    <div class="item">
                    <span class="animated-emoji zoom-in-zoom-out" data-emoji-size="40">
                        <img
                            src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/Smilies/Smiling Face with Hearts.png"
                            alt="Animated Emoji">
                    </span>
                        <h2 class="title">20+</h2>
                        <p class="caption">Sponsors</p>
                    </div>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item fade-in" data-animate-scroll="fade-in">
                        <img class="gallery-image" src="/images/Gallery-1.webp" alt="gallery-image"/>
                    </div>
                    <div class="gallery-item fade-in" data-animate-scroll="fade-in">
                        <img class="gallery-image" src="/images/Gallery-2.webp" alt="gallery-image"/>
                    </div>
                    <div class="gallery-item fade-in" data-animate-scroll="fade-in">
                        <img class="gallery-image" src="/images/Gallery-3.webp" alt="gallery-image"/>
                    </div>
                    <div class="gallery-item fade-in" data-animate-scroll="fade-in">
                        <img class="gallery-image" src="/images/Gallery-4.webp" alt="gallery-image"/>
                    </div>
                    <div class="gallery-item fade-in" data-animate-scroll="fade-in">
                        <img class="gallery-image" src="/images/Gallery-5.webp" alt="gallery-image"/>
                    </div>
                    <div class="gallery-item fade-in" data-animate-scroll="fade-in">
                        <img class="gallery-image" src="/images/Gallery-6.webp" alt="gallery-image"/>
                    </div>
                    <div class="gallery-item fade-in" data-animate-scroll="fade-in">
                        <img class="gallery-image" src="/images/Gallery-7.webp" alt="gallery-image"/>
                    </div>
                    <div class="gallery-item fade-in" data-animate-scroll="fade-in">
                        <img class="gallery-image" src="/images/Gallery-8.webp" alt="gallery-image"/>
                    </div>
                </div>
            </div>
        </section>

        <section data-layout="section-with-title">
            <div class="title-box">
                <h3 class="title">What to expect?</h3>
                <p class="caption">Learn about industry trends, best practices and new innovations through sessions
                    and workshops when you are not having fun with all the entertainment and activities.</p>
            </div>

            <div class="content-box">
                <div class="features" data-size="L">
                    <div class="feature">
                        <i class="icon">
                        <span class="animated-emoji" data-emoji-size="50">
                            <img
                                src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/Activities/Artist Palette.png"
                                alt="Feature Icon">
                        </span>
                        </i>
                        <h5>Workshops</h5>
                        <p>Led by industry experts, these workshops offer a unique opportunity to gain practical skills
                            and insights, making them a valuable experience for both beginners and seasoned
                            professionals.</p>
                    </div>
                    <div class="feature">
                        <i class="icon">
                        <span class="animated-emoji" data-emoji-size="50">
                            <img
                                src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/Activities/Bullseye.png"
                                alt="Feature Icon">
                        </span>
                        </i>
                        <h5>Panel Discussions</h5>
                        <p>The panel discussions bring together thought leaders and innovators to explore current
                            trends, challenges, and the future of technology. These engaging sessions provide a platform
                            for diverse perspectives and lively debates, sparking new ideas and inspiring our
                            community.</p>
                    </div>
                    <div class="feature">
                        <i class="icon">
                        <span class="animated-emoji" data-emoji-size="50">
                            <img
                                src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/Activities/Performing Arts.png"
                                alt="Feature Icon">
                        </span>
                        </i>
                        <h5>Speaker Sessions</h5>
                        <p>DevCon sessions are packed with knowledge-sharing and inspiration, featuring local and
                            international speakers. From cutting-edge innovations to practical applications, these talks
                            cover a wide range of topics, ensuring there's something for everyone, whether you're a
                            developer, designer, or entrepreneur.</p>
                    </div>
                    <div class="feature">
                        <i class="icon">
                        <span class="animated-emoji" data-emoji-size="50">
                            <img
                                src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/Activities/Bowling.png"
                                alt="Feature Icon">
                        </span>
                        </i>
                        <h5>Friendly Atmosphere</h5>
                        <p>DevCon is known for its warm and inclusive atmosphere. Whether you are a first-time attendee
                            or a conference veteran, you'll feel right at home. Our community is supportive and eager to
                            connect, making DevCon a place where lasting professional relationships are formed.</p>
                    </div>
                    <div class="feature">
                        <i class="icon">
                        <span class="animated-emoji" data-emoji-size="50">
                            <img
                                src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/Activities/Sports Medal.png"
                                alt="Feature Icon">
                        </span>
                        </i>
                        <h5>Activities</h5>
                        <p>Beyond the sessions and discussions, DevCon offers a range of cool activities that add an
                            extra layer of fun to the conference. From interactive games to creative challenges, these
                            activities are designed to engage and entertain, making DevCon a memorable experience for
                            all attendees.</p>
                    </div>
                    <div class="feature">
                        <i class="icon">
                        <span class="animated-emoji" data-emoji-size="50">
                            <img
                                src="https://raw.githubusercontent.com/vnsnippets/developers-conference/release/resources/.optimized/Objects/Necktie.png"
                                alt="Feature Icon">
                        </span>
                        </i>
                        <h5>Networking</h5>
                        <p>The networking hour is an 'invitation-only' event, offering a relaxed environment to connect
                            with peers, mentors, and industry leaders. It's the perfect opportunity to exchange ideas,
                            collaborate on projects, and expand your professional network in a casual, friendly
                            setting.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
