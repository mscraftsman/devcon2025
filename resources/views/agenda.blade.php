@extends('layouts.main')

@section('content')
  <div class="page--agenda" x-data="{ selectedOption: 'thursday' }">

    <section class="bg-gradient-to-r from-[#9F00FF] to-[#00B0FF] pt-10 pb-5">
      <section class="max-w-4xl px-3 mb-7 mt-15 mx-auto pt-3 pb-4 sm:pt-5 sm:pb-10">
        <h1 class="text-center text-shadow-lg mt-1 font-devcon text-white uppercase font-black mb-1 text-3xl sm:text-6xl">Agenda 📣</h1>
        <p class="text-center text-white font-dm max-w-3xl text-sm sm:text-lg">Step into a world of learning, collaboration, and breakthrough ideas that will fuel your innovation and growth</p>
      </section>
    </section>

    <section class="mt-10 max-w-7xl px-2 mx-auto" >
      <div class="days__container grid grid-cols-3 gap-2">
        <div class="date uppercase font-content text-sky-300 font-bold text-center text-2xl">24 July</div>
        <div class="date uppercase font-content text-sky-300 font-bold text-center text-2xl">25 July</div>
        <div class="date uppercase font-content text-sky-300 font-bold text-center text-2xl">26 July</div>
      </div>
    </section>

    <section class="mt-3 max-w-7xl px-2 mx-auto " >
      <div class="day__selector">
        <div class="days__container grid grid-cols-3 gap-2" >
            <div class="day--thursday">
              <input type="radio"
                id="day-thursday"
                name="day-selection"
                x-model="selectedOption"
                value="thursday"
                checked="true"
                class="hidden peer"
                required>
              <label
                for="day-thursday"
                class="
                      text-1xl
                      font-content
                      inline-flex
                      items-center
                      justify-center
                      w-full
                      px-3 py-4
                      text-center
                      bg-white
                      border-gray-200
                      rounded-lg
                      border-2
                      cursor-pointer
                      hover:text-gray-600
                      hover:bg-gray-200
                      peer-checked:border-sky-400
                      peer-checked:border-2
                      peer-checked:bg-sky-400
                      peer-checked:text-white
                      peer-checked:hover:bg-white
                      peer-checked:hover:text-black
                      peer-checked:hover:border-2
                      peer-checked:hover:border-sky-400
                      ">
                <div class="block">
                  <div class="w-full uppercase text-md font-bold">Thursday</div>
                </div>
              </label>
            </div>
            <div class="day--friday">
              <input
                type="radio"
                id="day-friday"
                name="day-selection"
                x-model="selectedOption"
                value="friday"
                class="hidden peer">
              <label
                for="day-friday"
                class="
                      font-content
                      inline-flex
                      items-center
                      justify-center
                      w-full
                      px-3 py-4
                      text-center
                      bg-white
                      border-gray-200
                      rounded-lg
                      border-2
                      cursor-pointer
                      hover:text-gray-600
                      hover:bg-gray-200
                      peer-checked:border-sky-400
                      peer-checked:border-2
                      peer-checked:bg-sky-400
                      peer-checked:text-black
                      peer-checked:hover:bg-white
                      peer-checked:hover:text-black
                      peer-checked:hover:border-2
                      peer-checked:hover:border-sky-400
                      ">
                <div class="block">
                  <div class="w-full uppercase text-md font-bold">Friday</div>
                </div>
              </label>
            </div>
            <div class="day--saturday">
              <input
                type="radio"
                id="day-saturday"
                name="day-selection"
                x-model="selectedOption"
                value="saturday"
                class="hidden peer">
              <label
                for="day-saturday"
                class="
                      font-content
                      inline-flex
                      items-center
                      justify-center
                      w-full
                      px-3 py-4
                      text-center
                      bg-white
                      border-gray-200
                      rounded-lg
                      border-2
                      cursor-pointer
                      hover:text-gray-600
                      hover:bg-gray-200
                      peer-checked:border-sky-400
                      peer-checked:border-2
                      peer-checked:bg-sky-400
                      peer-checked:text-black
                      peer-checked:hover:bg-white
                      peer-checked:hover:text-black
                      peer-checked:hover:border-2
                      peer-checked:hover:border-sky-400
                      ">
                <div class="block">
                  <div class="w-full uppercase text-md font-bold">Saturday</div>
                </div>
              </label>
            </div>
        </div>
      </div>
    </section>
    <section class="mt-6 px-2 max-w-7xl mx-auto border-t-1 border-sky-200 pt-5 pb-3">
      <div class="font-content text-sky-300 font-black uppercase">Selected agenda: <span x-text="selectedOption"></span></div>
    </section>
    <section class="mt-2 max-w-7xl px-2 mx-auto flex">

      <div class="sessions__column">

        <div class="tracks__container grid grid-cols-[70px_repeat(3,_1fr)] gap-2 mb-10 h-12" id="rooms-bar">
          <div class="track__title text-center bg-sky-200 text-sky-500 items-center justify-items-center justify-center text-2xl flex uppercase font-bold rounded-md ">
           <span style="margin-bottom: -6px; rotate: -40deg;">⏱️</span><span style="margin-bottom: 6px; rotate: -40deg;">🏃‍♂️‍➡️</span>
          </div>
          <div class="track__title text-center bg-[#9F00FF] text-white py-4 uppercase font-bold rounded-md">
            Educator 1 😄
          </div>
          <div class="track__title text-center bg-[#9F00FF] text-white py-4 uppercase font-bold rounded-md">
            Educator 2 😇
          </div>
          <div class="track__title text-center bg-[#9F00FF] text-white py-4 uppercase font-bold rounded-md">
            Accelerator ⚡️
          </div>
        </div>

        <div class="registration--block">
          <div class="session__wrapper px-4 py-3 ml-20 mt-20 rounded-md bg-slate-100 block">
            <div class="tile_start font-content text-sm text-slate-500 mb-1 font-medium">
              As from 08:30 — 15:00
            </div>
            <h3 class="font-bold text-md mb-2 text-slate-700 font-devcon">Registration</h3>
          </div>
        </div>

        <div class="day--agenda day--thurday--agenda" id="agenda-thursday" x-show="selectedOption == 'thursday'">
          <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIds) }}">
            @foreach($time_range as $time)
              <div
                class="time__track"
                style="grid-area: {{ calculateTimePlacement($time) }}"
              ><span class="time__tag px-2 py-2 bg-sky-100 font-medium text-sky-500 center rounded-md inline-flex">
                {{$time}}
                </span>
                <div class="line"></div>
              </div>
            @endforeach

            @foreach($groupedSessions as $key => $value)
                @if($key == 'Thursday')
                    @foreach($value as $key => $session)
                        @php
                            // Normal calculated grid-row
                            $gridRow = calculatePlacementGridRow($session, $time_range);

                            // Special case for session id 963227
                            if ($session['id'] == 963227) {
                                $gridColumn = '2 / 5';
                            } else if ($session['id'] == 870159) {
                                $gridColumn = '2 / 4';
                            } else {
                                $gridColumn = calculatePlacementGridColumn($session, $roomNames);
                            }
                        @endphp

                        {{-- Special case for session id 963227 --}}

                        @if ($session['id'] == 963227)
                        <a
                            class="session__wrapper px-4 py-3 rounded-md !bg-slate-100 block mb-3 border-slate-200 border-3 border-solid hover:!bg-purple-100 hover:border-[#9F00FF] hover:drop-shadow-md transition-all hover:scale-103"
                            style="grid-row: {{ $gridRow }}; grid-column: {{ $gridColumn }}; position: relative; overflow: hidden;"
                            data-room="{{ $session['room'] }}"
                            href="/agenda/{{ $session['id'] }}"
                        >
                            <div class="bg-sky-100 rounded-md inline-block px-2 py-1 mb-2 text-sm text-sky-500 mb-1 font-regular">
                                {{ convertDateTimeToTime($session['startsAt']) }} - {{ convertDateTimeToTime($session['endsAt']) }}
                            </div>

                            <div class="flex">
                              <div class="sponsor-logo border-r-1 border-slate-300 pr-5 mr-5 mb-4">
                                <h3 class="font-bold text-md mb-2 text-sky-400 font-content uppercase text-xs">Opening Keynote</h3>
                                <div class="">
                                  <img  src="{{ asset('images/sponsors/swan.png') }}" alt="" class="h-[50px]">
                                </div>
                              </div>
                              <div class="session-content">
                                <h3 class="font-bold text-md mb-2 text-slate-700 font-devcon text-1xl">🚀 {{ $session['title'] }}</h3>
                                <div class="speaker text-sm mt-2">
                                  @foreach($session['speakers'] as $key => $speaker)
                                      <div class="speaker--headshot flex items-center mb-1">
                                          <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-10 h-10 rounded-full mr-2 border-2 border-slate-400" alt="{{ $speaker['name'] }}">
                                          <div class="font-black text-sky-400">{{ $speaker['name'] }}</div>
                                      </div>
                                  @endforeach
                                </div>
                              </div>
                            </div>

                            <img class="absolute top-0 right-0 opacity-25 rotate-320" src="{{ asset('images/sponsors/swan.png') }}" alt="">
                        </a>
                        @else
                        <a
                            class="session__wrapper px-4 py-3 rounded-md !bg-slate-100 block mb-3 border-slate-100 border-3 border-solid hover:!bg-purple-100 hover:border-[#9F00FF] hover:drop-shadow-md transition-all hover:scale-103"
                            style="grid-row: {{ $gridRow }}; grid-column: {{ $gridColumn }}"
                            data-room="{{ $session['room'] }}"
                            href="/agenda/{{ $session['id'] }}"
                        >
                            <div class="bg-sky-100 rounded-md inline-block px-2 py-1 mb-2 text-sm text-sky-500 mb-1 font-regular">
                                {{ convertDateTimeToTime($session['startsAt']) }} - {{ convertDateTimeToTime($session['endsAt']) }}
                            </div>
                            <h3 class="font-bold text-md mb-2 text-slate-700 font-devcon text-1xl">{{ $session['title'] }}</h3>
                            <div class="speaker text-sm mt-2">
                                @foreach($session['speakers'] as $key => $speaker)
                                    <div class="speaker--headshot flex items-center mb-1">
                                        <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-9 h-9 rounded-full mr-2" alt="{{ $speaker['name'] }}">
                                        <div class="font-regular text-slate-500">{{ $speaker['name'] }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
          </div>
          <div class="text-2xl font-content text-sky-300 font-black uppercase text-center">Networking hour (Invitation Only) sponsored by</div>
          <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center mb-5">
            <a href="https://spoonconsulting.com" target="_blank" rel="noopener noreferrer">
              <img src="{{ asset('images/sponsors/spoonconsulting.png') }}" alt="Spoon Consulting" class="h-[100px]" />
            </a>
          </div>
          <div class="text-2xl font-content text-slate-500 font-black uppercase text-center">17:30 to 20:00</div>
        </div>

        <div class="day--friday--agenda" id="agenda-friday" x-show="selectedOption == 'friday'">
          <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIdsFriday) }}">
            @foreach($time_range_friday as $time)
              <div
                class="time__track"
                style="grid-area: {{ calculateTimePlacement($time) }}"
              ><span class="time__tag px-2 py-2 bg-sky-100 font-medium text-sky-500 center rounded-md inline-flex">
                {{$time}}
                </span>
                <div class="line"></div>
              </div>
            @endforeach

            @foreach($groupedSessions as $key => $value)
              @if($key == 'Friday')
                @foreach($value as $key => $session)
                @php
                    // Normal calculated grid-row
                    $gridRow = calculatePlacementGridRow($session, $time_range);

                    // Special case for session id 971242
                    if ($session['id'] == 971242) {
                        $gridColumn = '2 / 5';
                    } else {
                        $gridColumn = calculatePlacementGridColumn($session, $roomNames);
                    }
                @endphp

                {{-- Special case for session id 971242 --}}
                @if ($session['id'] == 971242)
                <a
                    class="session__wrapper px-4 py-3 rounded-md !bg-slate-100 block mb-3 border-slate-200 border-3 border-solid hover:!bg-purple-100 hover:border-[#9F00FF] hover:drop-shadow-md transition-all hover:scale-103"
                    style="grid-row: {{ $gridRow }}; grid-column: {{ $gridColumn }}; position: relative; overflow: hidden;"
                    data-room="{{ $session['room'] }}"
                    href="/agenda/{{ $session['id'] }}"
                >
                    <div class="bg-sky-100 rounded-md inline-block px-2 py-1 mb-2 text-sm text-sky-500 mb-1 font-regular">
                        {{ convertDateTimeToTime($session['startsAt']) }} - {{ convertDateTimeToTime($session['endsAt']) }}
                    </div>

                    <div class="flex">
                      <div class="sponsor-logo border-r-1 border-slate-300 pr-5 mr-5 mb-4">
                        <h3 class="font-bold text-md mb-2 text-sky-400 font-content uppercase text-xs">Opening Keynote</h3>
                        <div class="">
                          <img  src="{{ asset('images/sponsors/google.png') }}" alt="" class="h-[50px]">
                        </div>
                      </div>
                      <div class="session-content">
                        <h3 class="font-bold text-md mb-2 text-slate-700 font-devcon text-1xl">🚀 {{ $session['title'] }}</h3>
                        <div class="speaker text-sm mt-2">
                          @foreach($session['speakers'] as $key => $speaker)
                              <div class="speaker--headshot flex items-center mb-1">
                                  <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-10 h-10 rounded-full mr-2 border-2 border-slate-400" alt="{{ $speaker['name'] }}">
                                  <div class="font-black text-sky-400">{{ $speaker['name'] }}</div>
                              </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                    
                    <img class="absolute top-0 right-0 opacity-25 rotate-320 h-[150px]" src="{{ asset('images/sponsors/google.png') }}" alt="">
                </a>
                @else
                <a
                    class="session__wrapper px-4 py-3 rounded-md !bg-slate-100 block mb-3 border-slate-100 border-3 border-solid hover:bg-slate-200 hover:border-[#9F00FF] hover:drop-shadow-md transition-all hover:scale-105"
                    style="grid-row: {{ $gridRow }}; grid-column: {{ $gridColumn }}"
                    data-room="{{ $session['room'] }}"
                    href="/agenda/{{ $session['id'] }}"
                    >
                    <div class="bg-sky-100 rounded-md inline-block px-2 py-1 mb-2 text-sm text-sky-500 mb-1 font-regular">
                      {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                    </div>
                    <h3 class="font-bold text-md mb-2 text-slate-700 font-devcon text-1xl">{{ $session['title'] }}</h3>
                    <div class="speaker text-sm mt-2">
                      @foreach($session['speakers'] as $key => $speaker)
                        <div class="speaker--headshot flex items-center mb-1">
                          <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-9 h-9 rounded-full mr-2" alt="{{$speaker['name']}}">
                          <div class="font-regular text-slate-500">{{ $speaker['name'] }}</div>
                        </div>
                      @endforeach
                    </div>
                  </a>
                  @endif
                @endforeach
              @endif
            @endforeach
          </div>

          <div class="text-2xl font-content text-sky-300 font-black uppercase text-center">Speakers dinner (invitation only) sponsored by</div>
          <div class="mt-4 max-w-4xl mx-auto flex items-center justify-center mb-5">
            <a href="https://mscc.mu" target="_blank" rel="noopener noreferrer">
              <img src="{{ asset('images/mscc-logo-dark.svg') }}" alt="MSCC" class="h-[70px]" />
            </a>
          </div>
          <div class="text-2xl font-content text-slate-500 font-black uppercase text-center">18:00 to 22:00</div>
        </div>

        <div class="day--saturday--agenda" id="agenda-saturday" x-show="selectedOption == 'saturday'">
          <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIdsSaturday) }}">
            @foreach($time_range_saturday as $time)
              <div
                class="time__track"
                style="grid-area: {{ calculateTimePlacement($time) }}"
              ><span class="time__tag px-2 py-2 bg-sky-100 font-medium text-sky-500 center rounded-md inline-flex">
                {{$time}}
                </span>
                <div class="line"></div>
              </div>
            @endforeach

            @foreach($groupedSessions as $key => $value)
              @if($key == 'Saturday')
                @foreach($value as $key => $session)
                @php
                    // Normal calculated grid-row
                    $gridRow = calculatePlacementGridRow($session, $time_range);

                    // Special case for session id 961766 || 850bd572-7a30-41f2-a3e2-9116661b3281
                    if ($session['id'] == 961766 || $session['id'] == '850bd572-7a30-41f2-a3e2-9116661b3281') {
                        $gridColumn = '2 / 5';
                    } else {
                        $gridColumn = calculatePlacementGridColumn($session, $roomNames);
                    }
                @endphp

                {{-- Special case for session id 961766 --}}
                @if ($session['id'] == 961766)
                <a
                    class="session__wrapper px-4 py-3 rounded-md !bg-slate-100 block mb-3 border-slate-200 border-3 border-solid hover:!bg-purple-100 hover:border-[#9F00FF] hover:drop-shadow-md transition-all hover:scale-103"
                    style="grid-row: {{ $gridRow }}; grid-column: {{ $gridColumn }}; position: relative; overflow: hidden;"
                    data-room="{{ $session['room'] }}"
                    href="/agenda/{{ $session['id'] }}"
                >
                    <div class="bg-sky-100 rounded-md inline-block px-2 py-1 mb-2 text-sm text-sky-500 mb-1 font-regular">
                        {{ convertDateTimeToTime($session['startsAt']) }} - {{ convertDateTimeToTime($session['endsAt']) }}
                    </div>

                    <div class="flex">
                      <div class="sponsor-logo border-r-1 border-slate-300 pr-5 mr-5 mb-4">
                        <h3 class="font-bold text-md mb-2 text-sky-400 font-content uppercase text-xs">Opening Keynote</h3>
                        <div class="">
                          <img  src="{{ asset('images/sponsors/axiz-microsoft.png') }}" alt="" class="h-[50px]">
                        </div>
                      </div>
                      <div class="session-content">
                        <h3 class="font-bold text-md mb-2 text-slate-700 font-devcon text-1xl">🚀 {{ $session['title'] }}</h3>
                        <div class="speaker text-sm mt-2">
                          @foreach($session['speakers'] as $key => $speaker)
                              <div class="speaker--headshot flex items-center mb-1">
                                  <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-10 h-10 rounded-full mr-2 border-2 border-slate-400" alt="{{ $speaker['name'] }}">
                                  <div class="font-black text-sky-400">{{ $speaker['name'] }}</div>
                              </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                    
                    <img class="absolute top-0 right-0 opacity-25 rotate-320 h-[90px]" src="{{ asset('images/sponsors/axiz-microsoft.png') }}" alt="">
                </a>
                @else
                <a
                    class="session__wrapper px-4 py-3 rounded-md !bg-slate-100 block mb-3 border-slate-100 border-3 border-solid hover:bg-slate-200 hover:border-[#9F00FF] hover:drop-shadow-md transition-all hover:scale-105"
                    style="grid-row: {{ $gridRow }}; grid-column: {{ $gridColumn }}"
                    data-room="{{ $session['room'] }}"
                    href="/agenda/{{ $session['id'] }}"
                    >
                    <div class="bg-sky-100 rounded-md inline-block px-2 py-1 mb-2 text-sm text-sky-500 mb-1 font-regular">
                      {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                    </div>
                    <h3 class="font-bold text-md mb-2 text-slate-700 font-devcon text-1xl">{{ $session['title'] }}</h3>
                    <div class="speaker text-sm mt-2">
                      @foreach($session['speakers'] as $key => $speaker)
                        <div class="speaker--headshot flex items-center mb-1">
                          <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-9 h-9 rounded-full mr-2" alt="{{$speaker['name']}}">
                          <div class="font-regular text-slate-500">{{ $speaker['name'] }}</div>
                        </div>
                      @endforeach
                    </div>
                  </a>
                @endif
                @endforeach
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
