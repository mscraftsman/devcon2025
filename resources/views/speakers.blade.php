@extends('layouts.main')

@section('content')
  <div class="page--speakers">
    <section class="bg-gradient-to-r from-[#6e45e2] to-[#88d3ce] pt-10 pb-5">
      <section class="max-w-4xl px-3 mb-7 mt-15 mx-auto pt-3 pb-4 sm:pt-5 sm:pb-10">
        <h1 class="text-center text-shadow-lg mt-1 font-devcon text-white uppercase font-black mb-1 text-3xl sm:text-6xl">Speakers 😱</h1>
        <p class="text-center text-white font-dm max-w-3xl text-sm sm:text-lg">Hear from top experts and innovators leading the future of software development in Mauritius & worldwide</p>
      </section>
    </section>

    <section class="mt-10 mb-16 pt-8 max-w-6xl px-3 mx-auto">
      @if(isset($error))
        <p>{{ $error }}</p>
      @else
        <div class="grid xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
          @foreach($speakers as $speaker)
            <a href="{{route('speaker', $speaker['id'])}}" class="p-5 transition-all  hover:scale-[105%] hover:bg-gray-100 rounded-md">
              <img class="w-30 h-30 rounded-full mx-auto drop-shadow-xl" src="{{ $speaker['profilePicture'] }}">
              <div class="pt-6 text-center space-y-3">
                <figcaption class="font-medium">
                  <div class="uppercase font-devcon font-bold bg-gradient-to-r from-sky-600 to-indigo-400 inline-block text-transparent bg-clip-text mb-2">
                    {{ $speaker['fullName'] }}
                  </div>
                  <div class="font-content text-sm font-light text-gray-600">
                    {{ $speaker['tagLine'] }}
                  </div>
                </figcaption>
              </div>
            </a>
          @endforeach
        </div>
      @endif
    </section>
  </div>

@endsection