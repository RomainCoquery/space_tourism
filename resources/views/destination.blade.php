<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>Space Tourism Destination</title>
</head>

<body class="page destination">

    @include('layouts.header')

    <h1 class="title5 page_title"><strong>01</strong>{{ __("destinationH1") }}</h1>

    <div class="planet_body main">

        <div class="planet_picture picture">
            @foreach ($planets as $planet)
                <img data-name="{{$planet->name}}" class="{{ $loop->first ? 'active' : 'hidden' }}" src="{{asset($planet->picture)}}" alt="{{$planet->name}}">
            @endforeach
            {{-- <img data-name="1" class="active" src="{{ asset('img/moon.png') }}" alt="Lune">
            <img data-name="2" class="hidden" src="{{ asset('img/mars.png') }}" alt="Mars">
            <img data-name="3" class="hidden" src="{{ asset('img/europe.png') }}" alt="Europe">
            <img data-name="4" class="hidden" src="{{ asset('img/titan.png') }}" alt="Titan"> --}}
        </div>

        <div class="planet_content">
            <div class="navbar">
                <nav class="nav_bar_planet navigation">
                    <ul class="nav_bar_planet_list ">
                        @foreach ($planets as $planet)
                            <li><button class="button navigation {{ $loop->first ? 'active' : 'hidden' }}" data-name="{{$planet->name}}">{{$planet->name}}</button></li>
                        @endforeach

                        {{-- <li><button class="button active navigation" data-name="1">{{ __("moon") }}</button></li>
                        <li><button class="button hidden navigation" data-name="2">{{ __("mars") }}</button></li>
                        <li><button class="button hidden navigation" data-name="3">{{ __("europa") }}</button></li>
                        <li><button class="button hidden navigation" data-name="4">{{ __("titan") }}</button></li> --}}
                    </ul>
                </nav>
            </div>

            <!-- Contenu de la planète -->
            @foreach ($planets as $planet)
                <div data-name="{{$planet->name}}" class="planet_description description {{ $loop->first ? 'active' : 'hidden' }}">
                    <h2 class="title2">{{$planet->name}}</h2>
                    <p class="body">{{$planet->description}}</p>
                    <div class="line_planet">
                        <img src="{{ asset('img/decoration.png') }}" alt="Decoration">
                    </div>
                    <div class="planet_travel">
                        <div class="planet_distance">
                            <ul>
                                <li class="subtitle2">Distance</li>
                                <li></li>
                                <li class="subtitle1">{{$planet->distance}} {{$planet->distance_unit}}</li>
                            </ul>
                        </div>
                        <div class="planet_duration">
                            <ul>
                                <li class="subtitle2">{{ __("duration") }}</li>
                                <li></li>
                                <li class="subtitle1">{{$planet->duration}} {{$planet->duration_unit}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <!-- Contenu de la lune -->
            <div data-name="1" class="planet_description description active">
                <h2 class="title2">{{ __("moon") }}</h2>
                <p class="body">{{ __("moonText") }}</p>
                <div class="line_planet">
                    <img src="{{ asset('img/decoration.png') }}" alt="Decoration">
                </div>
                <div class="planet_travel">
                    <div class="planet_distance">
                        <ul>
                            <li class="subtitle2">Distance</li>
                            <li></li>
                            <li class="subtitle1">384 000 KM</li>
                        </ul>
                    </div>
                    <div class="planet_duration">
                        <ul>
                            <li class="subtitle2">{{ __("duration") }}</li>
                            <li></li>
                            <li class="subtitle1">3 {{ __("day") }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contenu de mars -->
            <div data-name="2" class="planet_description description hidden">
                <h2 class="title2">{{ __("mars") }}</h2>
                <p class="body">{{ __("marsText") }}</p>
                <div class="line_planet">
                    <img src="{{ asset('img/decoration.png') }}" alt="Decoration">
                </div>
                <div class="planet_travel">
                    <div class="planet_distance">
                        <ul>
                            <li class="subtitle2">Distance</li>
                            <li class="subtitle1">225 GM</li>
                        </ul>
                    </div>
                    <div class="planet_duration">
                        <ul>
                            <li class="subtitle2">{{ __("duration") }}</li>
                            <li class="subtitle1">9 {{ __("month") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
                
            <!-- Contenu d'europe -->
            <div data-name="3" class="planet_description description hidden">
                <h2 class="title2">{{ __("europa") }}</h2>
                <p class="body">{{ __("europaText") }}</p>
                <div class="line_planet">
                    <img src="{{ asset('img/decoration.png') }}" alt="Decoration">
                </div>
                <div class="planet_travel">
                    <div class="planet_distance">
                        <ul>
                            <li class="subtitle2">Distance</li>
                            <li class="subtitle1">628 GM</li>
                        </ul>
                    </div>
                    <div class="planet_duration">
                        <ul>
                            <li class="subtitle2">{{ __("duration") }}</li>
                            <li class="subtitle1">3 {{ __("year") }}</li>
                        </ul>
                    </div>
                </div>
            </div>
                        
            <!-- Contenu de titan -->
            <div data-name="4" class="planet_description description hidden">
                <h2 class="title2">{{ __("titan") }}</h2>
                <p class="body">{{ __("titanText") }}</p>
                <div class="line_planet">
                    <img src="{{ asset('img/decoration.png') }}" alt="Decoration">
                </div>
                <div class="planet_travel">
                    <div class="planet_distance">
                        <ul>
                            <li class="subtitle2">Distance</li>
                            <li class="subtitle1">1,6 TM</li>
                        </ul>
                    </div>
                    <div class="planet_duration">
                        <ul>
                            <li class="subtitle2">{{ __("duration") }}</li>
                            <li class="subtitle1">7 {{ __("year") }}</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</body>
</html>