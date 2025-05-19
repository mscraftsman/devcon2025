@extends('layouts.main')

@section('content')
  <div class="page--agenda" x-data="{ selectedOption: 'thursday' }">

    <section>
      <section class="pt-5 pb-10 max-w-4xl px-3 mb-7 mx-auto ">
        <h2 class="text-center font-astronomus font-bold uppercase font-dm text-purple pt-5">Tropical Tech Revolution Unveiled</h2>
        <h1 class="text-center mt-1 text-gray-700 font-astronomus uppercase font-bold mb-1 text-4xl sm:text-6xl ">Agenda</h1>
        <p class="text-center text-slate-400 font-dm max-w-3xl text-sm sm:text-lg">Get ready to immerse yourself in knowledge, connect with like-minded individuals, and embark on a journey of innovation and growth.</p>
      </section>
    </section>

    <section class="mt-10 max-w-7xl px-2 mx-auto" >
      <div class="days__container grid grid-cols-3 gap-2">
        <div class="date uppercase text-slate-300 text-center">24 July</div>
        <div class="date uppercase text-slate-300 text-center">25 July</div>
        <div class="date uppercase text-slate-300 text-center">26 July</div>
      </div>
    </section>

    <section class="mt-3 max-w-7xl px-2 mx-auto" >
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
                      peer-checked:border-yellow-400
                      peer-checked:border-2
                      peer-checked:bg-yellow-400
                      peer-checked:text-black
                      peer-checked:hover:bg-white
                      peer-checked:hover:text-black
                      peer-checked:hover:border-2
                      peer-checked:hover:border-yellow-400
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
                      peer-checked:border-yellow-400
                      peer-checked:border-2
                      peer-checked:bg-yellow-400
                      peer-checked:text-black
                      peer-checked:hover:bg-white
                      peer-checked:hover:text-black
                      peer-checked:hover:border-2
                      peer-checked:hover:border-yellow-400
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
                      peer-checked:border-yellow-400
                      peer-checked:border-2
                      peer-checked:bg-yellow-400
                      peer-checked:text-black
                      peer-checked:hover:bg-white
                      peer-checked:hover:text-black
                      peer-checked:hover:border-2
                      peer-checked:hover:border-yellow-400
                      ">
                <div class="block">
                  <div class="w-full uppercase text-md font-bold">Saturday</div>
                </div>
              </label>
            </div>
        </div>
      </div>
    </section>
    <section class="mt-10 max-w-7xl px-2 mx-auto flex">

      <div class="sessions__column">

        <div class="tracks__container grid grid-cols-3 gap-2 mb-10 ml-20 h-12" id="rooms-bar">
          <div class="track__title text-center bg-[#9F00FF] text-white py-4 uppercase font-bold rounded-md">
            Educator 1
          </div>
          <div class="track__title text-center bg-[#9F00FF] text-white py-4 uppercase font-bold rounded-md">
            Educator 2
          </div>
          <div class="track__title text-center bg-[#9F00FF] text-white py-4 uppercase font-bold rounded-md">
            Accelerator
          </div>
        </div>

        <div class="registration--block">
          <div class="session__wrapper px-4 py-3 ml-20 mt-20 rounded-md bg-slate-100 block">
            <div class="tile_start text-sm text-slate-500 mb-1 font-medium">
              As from 08:30 — 15:00
            </div>
            <h3 class="font-bold text-md mb-2 text-slate-500 font-devcon">Registration</h3>
          </div>
        </div>

        <div class="day--agenda day--thurday--agenda" id="agenda-thursday" x-show="selectedOption == 'thursday'">
          <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIds) }}">
            @foreach($time_range as $time)
              <div
                class="time__track"
                style="grid-area: {{ calculateTimePlacement($time) }}"
              ><span class="time__tag px-2 py-2 bg-yellow-400 font-bold center rounded-md inline-flex">
                {{$time}}
                </span>
                <div class="line"></div>
              </div>
            @endforeach

            @foreach($groupedSessions as $key => $value)
              @if($key == 'Thursday')
                @foreach($value as $key => $session)
                  <a
                    class="session__wrapper px-4 py-3 rounded-md !bg-slate-100 block mb-3 border-slate-100 border-3 border-solid hover:bg-slate-200 hover:border-[#9F00FF] hover:drop-shadow-md transition-all hover:scale-105"
                    style="grid-row: {{ calculatePlacementGridRow($session, $time_range) }}; grid-column: {{ calculatePlacementGridColumn($session, $roomNames) }}"
                    data-room="{{ $session['room'] }}"
                    href="/agenda/{{ $session['id'] }}"
                    >
                    <div class="bg-slate-200 rounded-md inline-block px-2 py-1 mb-2 text-sm text-slate-500 mb-1 font-regular">
                      {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                    </div>
                    <h3 class="font-bold text-md mb-2 text-slate-500 font-devcon">{{ $session['title'] }}</h3>
                    <div class="speaker text-sm mt-2">
                      @foreach($session['speakers'] as $key => $speaker)
                        <div class="speaker--headshot flex items-center mb-1">
                          <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-8 h-8 rounded-full mr-2" alt="{{$speaker['name']}}">
                          <div class="font-light text-slate-500">{{ $speaker['name'] }}</div>
                        </div>
                      @endforeach
                    </div>
                  </a>
                @endforeach
              @endif
            @endforeach
          </div>
        </div>

        <div class="day--friday--agenda" id="agenda-friday" x-show="selectedOption == 'friday'">
          <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIdsFriday) }}">
            @foreach($time_range_friday as $time)
              <div
                class="time__track"
                style="grid-area: {{ calculateTimePlacement($time) }}"
              ><span class="time__tag px-2 py-2 bg-yellow-400 font-bold center rounded-md inline-flex">
                {{$time}}
                </span>
                <div class="line"></div>
              </div>
            @endforeach

            @foreach($groupedSessions as $key => $value)
              @if($key == 'Friday')
                @foreach($value as $key => $session)
                  <a
                    class="session__wrapper px-4 py-3 rounded-md !bg-slate-100 block mb-3 border-slate-100 border-3 border-solid hover:bg-slate-200 hover:border-[#9F00FF] hover:drop-shadow-md transition-all hover:scale-105"
                    style="grid-row: {{ calculatePlacementGridRow($session, $time_range) }}; grid-column: {{ calculatePlacementGridColumn($session, $roomNames) }}"
                    data-room="{{ $session['room'] }}"
                    href="/agenda/{{ $session['id'] }}"
                    >
                    <div class="bg-slate-200 rounded-md inline-block px-2 py-1 mb-2 text-sm text-slate-500 mb-1 font-regular">
                      {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                    </div>
                    <h3 class="font-bold text-md mb-2 text-slate-500 font-devcon">{{ $session['title'] }}</h3>
                    <div class="speaker text-sm mt-2">
                      @foreach($session['speakers'] as $key => $speaker)
                        <div class="speaker--headshot flex items-center mb-1">
                          <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-8 h-8 rounded-full mr-2" alt="{{$speaker['name']}}">
                          <div class="font-light text-slate-500">{{ $speaker['name'] }}</div>
                        </div>
                      @endforeach
                    </div>
                  </a>
                @endforeach
              @endif
            @endforeach
          </div>
        </div>

        <div class="day--saturday--agenda" id="agenda-saturday" x-show="selectedOption == 'saturday'">
          <div class="track__session" style="grid-template-areas: {{ generateGridTemplateAreas($cellIdsSaturday) }}">
            @foreach($time_range_saturday as $time)
              <div
                class="time__track"
                style="grid-area: {{ calculateTimePlacement($time) }}"
              ><span class="time__tag px-2 py-2 bg-yellow-400 font-bold center rounded-md inline-flex">
                {{$time}}
                </span>
                <div class="line"></div>
              </div>
            @endforeach

            @foreach($groupedSessions as $key => $value)
              @if($key == 'Saturday')
                @foreach($value as $key => $session)
                  <a
                    class="session__wrapper px-4 py-3 rounded-md !bg-slate-100 block mb-3 border-slate-100 border-3 border-solid hover:bg-slate-200 hover:border-[#9F00FF] hover:drop-shadow-md transition-all hover:scale-105"
                    style="grid-row: {{ calculatePlacementGridRow($session, $time_range) }}; grid-column: {{ calculatePlacementGridColumn($session, $roomNames) }}"
                    data-room="{{ $session['room'] }}"
                    href="/agenda/{{ $session['id'] }}"
                    >
                    <div class="bg-slate-200 rounded-md inline-block px-2 py-1 mb-2 text-sm text-slate-500 mb-1 font-regular">
                      {{convertDateTimeToTime($session['startsAt'])}} - {{convertDateTimeToTime($session['endsAt'])}}
                    </div>
                    <h3 class="font-bold text-md mb-2 text-slate-500 font-devcon">{{ $session['title'] }}</h3>
                    <div class="speaker text-sm mt-2">
                      @foreach($session['speakers'] as $key => $speaker)
                        <div class="speaker--headshot flex items-center mb-1">
                          <img src="{{ getSpeaker($speaker['id'])['profilePicture'] }}" class="w-8 h-8 rounded-full mr-2" alt="{{$speaker['name']}}">
                          <div class="font-light text-slate-500">{{ $speaker['name'] }}</div>
                        </div>
                      @endforeach
                    </div>
                  </a>
                @endforeach
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
