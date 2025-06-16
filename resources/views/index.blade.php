@extends('layouts.main')

@section('content')
<section class="relative shadow-lg">
    <div class="inset-0 z-0 bg-gradient-to-r from-[#9F00FF] to-[#00B0FF]">
        <div class="">
            <img src="{{ asset('images/hero-emojis.png') }}" class="w-full h-auto shadow-lg" />
        </div>
    </div>

    <!-- Overlay buttons -->
    <div class="absolute top-6 left-1/2 transform -translate-x-1/2 space-x-4 hidden lg:block">
        <div class="flex space-x-4">
            <a
                href="#agenda"
                class="hidden px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition"
            >
                Agenda
            </a>
            <a
                href="#register"
                class="hidden px-4 py-2 bg-orange-500 text-white rounded-lg shadow hover:bg-orange-600 transition"
            >
                Register
            </a>

        </div>
    </div>

    <div class="absolute top-6 lg:top-1/5 left-1/2 transform -translate-x-1/2">
        <img src="{{ asset('images/hero-mscc-logo.png') }}" alt="MSCC Logo" class="mx-auto mb-2 lg:mb-4 w-[100px] lg:w-[250px]" />
        <img src="{{ asset('images/hero-devcon.png') }}" alt="MSCC Logo" class="w-[175px] lg:w-[650px]" />
        <h2 class="mt-2 font-devcon text-md lg:text-3xl text-center text-white">24, 25 & 26 July</h2>
        <p class="mt-1 font-devcon text-sm lg:text-3xl text-center text-white">Voilà Hotel, Bagatelle</p>
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
    <div class="flex flex-col lg:flex-row max-w-7xl mx-auto gap-6 p-6">
        <div class="lg:w-[640px]">
            <h2 class="text-3xl lg:text-4xl font-black font-devcon">Sponsors & Partners</h2>
            <p class="mt-2 text-lg">
                We extend our heartfelt gratitude to all our sponsors and partners for their
                unwavering support and commitment to the Developers Conference. Thank you for
                believing in our mission and standing with us.
            </p>

            <div class="mt-8">
                <h2 class="text-xl font-bold">Count every second until the event</h2>
                <div class="mt-2 flex flex-row gap-4">
                    <div class="count-wrap">
                        <div class="flex flex-col items-center">
                            <p class="time text-3xl text-gray-700 font-black" id="days">137</p>
                            <p class="text-sm font-thin text-gray-600">Days</p>
                        </div>
                    </div>

                    <span class="text-2xl font-black">:</span>

                    <div class="count-wrap">
                        <div class="flex flex-col items-center">
                            <p class="time text-3xl text-gray-700 font-black" id="hours">18</p>
                            <p class="text-sm font-thin text-gray-600">Hours</p>
                        </div>
                    </div>

                    <span class="text-2xl font-black">:</span>

                    <div class="count-wrap">
                        <div class="flex flex-col items-center">
                            <p class="time text-3xl text-gray-700 font-black" id="minutes">13</p>
                            <p class="text-sm font-thin text-gray-600">Minutes</p>
                        </div>
                    </div>

                    <span class="text-2xl font-black">:</span>

                    <div class="count-wrap">
                        <div class="flex flex-col items-center">
                            <p class="time text-3xl text-gray-700 font-black" id="seconds">43</p>
                            <p class="text-sm font-thin text-gray-600">Seconds</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <p class="text-lg">Save the date in your calendar!</p>

                <div class="mt-4 flex flex-row gap-4">
                    <a rel="noopener" title="Save Event in my Calendar" target="_blank"
                        class="button secondary-outline-500"
                        href="https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20250724%2F20250727&details=Join%20the%20Developers%20Conference%202025%20along%20with%20developers%2C%20enthusiasts%20and%20industry%20experts%20for%20an%20engaging%20three%20days%20of%20technology%21%20The%20theme%20of%20the%20day%20is%3A%20Emojis%21&location=Voila%20Hotel%20Bagatelle&text=Developers%20Conference%202025">

                        <img class="p-2 rounded-md bg-gray-200 hover:bg-gray-300 transition ease-in-out duration-500 h-10" src="/images/icons/calendar/google.svg" alt="Google" />
                    </a>

                    <a rel="noopener" title="Save Event in my Calendar" target="_blank"
                        class="button secondary-outline-500"
                        href="https://outlook.live.com/calendar/0/action/compose?allday=true&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2025-07-24T04%3A00%3A00%2B00%3A00&enddt=2025-07-27T13%3A00%3A00%2B00%3A00&subject=Developers%20Conference%202025&body=Join%20the%20Developers%20Conference%202025%20along%20with%20developers%2C%20enthusiasts%20and%20industry%20experts%20for%20an%20engaging%20three%20days%20of%20technology%21%20The%20theme%20of%20the%20day%20is%3A%20Emojis%21&location=Voila%20Hotel%20Bagatelle">

                        <img class="p-2 rounded-md bg-gray-200 hover:bg-gray-300 transition ease-in-out duration-500 h-10" src="/images/icons/calendar/outlook.svg" alt="Outlook" />
                    </a>

                    <a rel="noopener" title="Save Event in my Calendar" target="_blank"
                        class="button secondary-outline-500"
                        href="https://outlook.office.com/calendar/action/compose?allday=true&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2025-07-24T04%3A00%3A00%2B00%3A00&enddt=2025-07-27T13%3A00%3A00%2B00%3A00&subject=Developers%20Conference%202025&body=Join%20the%20Developers%20Conference%202025%20along%20with%20developers%2C%20enthusiasts%20and%20industry%20experts%20for%20an%20engaging%20three%20days%20of%20technology%21%20The%20theme%20of%20the%20day%20is%3A%20Emojis%21&location=Voila%20Hotel%20Bagatelle">

                        <img class="p-2 rounded-md bg-gray-200 hover:bg-gray-300 transition ease-in-out duration-500 h-10" src="/images/icons/calendar/office.svg" alt="Office 365" />
                    </a>

                    <a rel="noopener" title="Save Event in my Calendar" target="_blank"
                        class="button secondary-outline-500"
                        href="https://calendar.yahoo.com/?desc=Join%20the%20Developers%20Conference%202025%20along%20with%20developers%2C%20enthusiasts%20and%20industry%20experts%20for%20an%20engaging%20three%20days%20of%20technology%21%20The%20theme%20of%20the%20day%20is%3A%20Emojis%21&dur=allday&in_loc=Voila%20Hotel%20Bagatelle&et=20250727&st=20250724&title=Developers%20Conference%202025&v=60">

                        <img class="p-2 rounded-md bg-gray-200 hover:bg-gray-300 transition ease-in-out duration-500 h-10" src="/images/icons/calendar/yahoo.svg" alt="Yahoo" />
                    </a>
                </div>

                <div class="mt-4">
                    <p class="text-lg">Did not find an option for your calendar? Download the file and import it manually.</p>
                    <div class="mt-5">
                        <a href="/calendar/devcon.ics" class="mt-4 p-3 bg-yellow-400 hover:bg-yellow-500 transition ease-in-out duration-500 rounded-md font-medium" download>Download Calendar File</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-full lg:border-l-1 lg:border-gray-200 lg:pl-6 mt-8 lg:mt-0">
            <div class="text-3xl lg:text-4xl font-black font-devcon flex items-center justify-center lg:justify-normal gap-2">Platinum
                <span><img src="/images/emojis/platinum.svg" class="-mt-6 h-16"></span>
            </div>
            <div class="mt-4 max-w-4xl mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-normal gap-4 lg:gap-8">
                <img src="/images/sponsors/swan.png" alt="SWAN" class="h-[65px] lg:h-[75px]" />
                <img src="/images/sponsors/google.png" alt="Google" class="h-[65px] lg:h-[75px]" />
                <img src="/images/sponsors/axiz-microsoft.png" alt="Axiz & Microsoft" class="h-[68px] lg:h-[85px]" />
            </div>
            <div class="hidden mt-6 lg:mt-8 lg:mt-4 max-w-4xl mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-normal gap-4 lg:gap-16">
                <img src="/images/sponsors/axiz-microsoft.png" alt="Axiz & Microsoft" class="h-[65px] lg:h-[90px]" />
            </div>

            <div class="mt-6 lg:mt-10 text-3xl lg:text-4xl font-black font-devcon flex items-center justify-center lg:justify-normal gap-2">Gold
                <span><img src="/images/emojis/gold.svg" class="-mt-2 h-12"></span>
            </div>
            <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center lg:justify-normal gap-8">
                <img src="/images/sponsors/publicis.png" alt="Publicis Global Delivery" class="h-[90px]" />
            </div>

            <div class="mt-6 lg:mt-10 text-3xl lg:text-4xl font-black font-devcon flex items-center justify-center lg:justify-normal gap-2">Silver
                <span><img src="/images/emojis/silver.svg" class="-mt-6 h-16"></span>
            </div>
            <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center lg:justify-normal gap-8">
                <img src="/images/sponsors/klanik.jpg" alt="Klanik" class="h-[50px]" />
            </div>

            <div class="mt-6 lg:mt-10 text-3xl lg:text-4xl font-black font-devcon flex items-center justify-center lg:justify-normal gap-2">Bronze
                <span><img src="/images/emojis/bronze.svg" class="-mt-2 h-12"></span>
            </div>
            <div class="mt-4 lg:mt-4 max-w-4xl mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-normal gap-4 lg:gap-16">
                <img src="/images/sponsors/clarity.png" alt="Clarity" class="h-[46px]" />
                <img src="/images/sponsors/cloudsure.png" alt="Cloudsure" class="h-[80px]" />
                <img src="/images/sponsors/novity.png" alt="Novity" class="h-[70px]" />
            </div>
            <div class="mt-6 lg:mt-8 lg:mt-4 max-w-4xl mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-normal gap-4 lg:gap-16">
                <img src="/images/sponsors/homsphere.png" alt="Homsphere" class="h-[46px]" />
                <img src="/images/sponsors/ios.png" alt="IOS - Indian Ocean Software Ltd" class="h-[70px]" />
                <img src="/images/sponsors/mcb.png" alt="MCB" class="h-[54px]" />
                <img src="/images/sponsors/infomil.png" alt="Infomil" class="h-[50px]" />
            </div>

            <div class="mt-6 lg:mt-10 text-3xl lg:text-4xl font-black font-devcon flex items-center justify-center lg:justify-normal gap-2">Speaker Sponsor
                <span><img src="/images/emojis/speaker.svg" class="-mt-2 h-12"></span>
            </div>
            <div class="mt-4 lg:mt-4 max-w-4xl mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-normal gap-6 lg:gap-16">
                <img src="/images/sponsors/jetbrains.png" alt="Jetbrains" class="h-[50px]" />
                <img src="/images/sponsors/ringier.png" alt="Ringier" class="h-[50px]" />
            </div>

            <div class="mt-6 lg:mt-10 grid grid-col-1 lg:grid-cols-3 place-items-center lg:place-items-start">
                <div>
                    <div class="mt-6 text-2xl font-black font-devcon text-center lg:text-left">Lanyard & Badge</div>
                    <div class="mt-4 max-w-4xl mx-auto flex justify-center gap-8">
                        <img src="/images/sponsors/cloud.mu.png" alt="cloud.mu" class="-mt-4 h-[90px]" />
                    </div>
                </div>
                <div>
                    <div class="mt-6 text-2xl font-black font-devcon text-center lg:text-left">Giveaways</div>
                    <div class="mt-4 max-w-4xl mx-auto flex justify-center gap-8">
                        <img src="/images/sponsors/novity.png" alt="Novity" class="h-[70px]" />
                    </div>
                </div>
                <div>
                    <div class="mt-6 text-2xl font-black font-devcon text-center lg:text-left">Internet</div>
                    <div class="mt-4 max-w-4xl mx-auto flex justify-center gap-8">
                        <img src="/images/sponsors/kaldera.png" alt="Kaldera" class="h-[50px]" />
                    </div>
                </div>
                <div>
                    <div class="mt-6 text-2xl font-black font-devcon text-center lg:text-left">Website Hosting</div>
                    <div class="mt-4 max-w-4xl mx-auto flex justify-center gap-8">
                        <img src="/images/sponsors/cloud.mu.png" alt="cloud.mu" class="h-[90px]" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--  What to expect  --}}
<section class="mt-16 max-w-4xl mx-auto">
    <h2 class="text-4xl lg:text-5xl font-devcon text-center">What to expect?</h2>
    <p class="mt-2 lg:mt-4 text-center text-lg lg:text-xl px-4 lg:px-0">
        Learn about industry trends, best practices and new innovations through sessions and workshops
        when you are not having fun with all the entertainment and activities.
    </p>
</section>

{{--  Gallery  --}}
<section class="mt-8 max-w-7xl mx-auto px-4 lg:px-0">
    <div class="grid grid-col-1 gap-4 lg:grid-cols-2">
        <div><img src="/images/gallery/1.jpeg" class="rounded-lg shadow-lg" /></div>
        <div><img src="/images/gallery/2.jpeg" class="rounded-lg shadow-lg" /></div>
    </div>
    <div class="mt-4 grid grid-col-1 gap-4 lg:grid-cols-3">
        <div><img src="/images/gallery/3.jpeg" class="rounded-lg shadow-lg" /></div>
        <div><img src="/images/gallery/4.jpeg" class="rounded-lg shadow-lg" /></div>
        <div><img src="/images/gallery/5.jpeg" class="rounded-lg shadow-lg" /></div>
    </div>
    <div class="mt-4 grid grid-col-1 gap-4 lg:grid-cols-2">
        <div><img src="/images/gallery/1a.jpeg" class="rounded-lg shadow-lg" /></div>
        <div><img src="/images/gallery/1c.jpeg" class="rounded-lg shadow-lg" /></div>
    </div>
    <div class="mt-4 grid grid-col-1 gap-4 lg:grid-cols-4">
        <div><img src="/images/gallery/6.jpeg" class="rounded-lg shadow-lg" /></div>
        <div><img src="/images/gallery/7.jpeg" class="rounded-lg shadow-lg" /></div>
        <div><img src="/images/gallery/8.jpeg" class="rounded-lg shadow-lg" /></div>
        <div><img src="/images/gallery/9.jpeg" class="rounded-lg shadow-lg" /></div>
    </div>
</section>

<section class="mt-10 max-w-7xl mx-auto px-4 lg:px-0">
    <div class="grid grid-col-1 lg:grid-cols-3 gap-6">
        <div>
            <img src="/images/emojis/palette.png" class="h-10" />
            <h3 class="mt-2 font-devcon text-xl">Workshops</h3>
            <p class="text-lg">
                Led by industry experts, these workshops offer a unique opportunity to gain
                practical skills and insights, making them a valuable experience for both
                beginners and seasoned professionals.
            </p>
        </div>
        <div>
            <img src="/images/emojis/bullseye.png" class="h-10" />
            <h3 class="mt-2 font-devcon text-xl">Panel Discussions</h3>
            <p class="text-lg">
                The panel discussions bring together thought leaders and innovators to explore
                current trends, challenges, and the future of technology. These engaging sessions
                provide a platform for diverse perspectives and lively debates, sparking new ideas
                and inspiring our community.
            </p>
        </div>
        <div>
            <img src="/images/emojis/performing-arts.png" class="h-10" />
            <h3 class="mt-2 font-devcon text-xl">Speaker Sessions</h3>
            <p class="text-lg">
                DevCon sessions are packed with knowledge-sharing and inspiration, featuring local
                and international speakers. From cutting-edge innovations to practical applications,
                these talks cover a wide range of topics, ensuring there's something for everyone,
                whether you're a developer, designer, or entrepreneur.
            </p>
        </div>
        <div>
            <img src="/images/emojis/bowling.png" class="h-10" />
            <h3 class="mt-2 font-devcon text-xl">Friendly Atmosphere</h3>
            <p class="text-lg">
                DevCon is known for its warm and inclusive atmosphere. Whether you are a first-time
                attendee or a conference veteran, you'll feel right at home. Our community is supportive
                and eager to connect, making DevCon a place where lasting professional relationships are
                formed.
            </p>
        </div>
        <div>
            <img src="/images/emojis/medal.png" class="h-10" />
            <h3 class="mt-2 font-devcon text-xl">Activities</h3>
            <p class="text-lg">
                Beyond the sessions and discussions, DevCon offers a range of cool activities that
                add an extra layer of fun to the conference. From interactive games to creative
                challenges, these activities are designed to engage and entertain, making DevCon
                a memorable experience for all attendees.
            </p>
        </div>
        <div>
            <img src="/images/emojis/necktie.png" class="h-10" />
            <h3 class="mt-2 font-devcon text-xl">Networking</h3>
            <p class="text-lg">
                The networking hour is an 'invitation-only' event, offering a relaxed environment
                to connect with peers, mentors, and industry leaders. It's the perfect opportunity
                to exchange ideas, collaborate on projects, and expand your professional network in
                a casual, friendly setting.
            </p>
        </div>
    </div>
</section>

<script src="/scripts/countdown.js"></script>
@endsection
