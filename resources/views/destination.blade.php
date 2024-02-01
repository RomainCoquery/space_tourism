
@extends('layouts.layout')

@section('title', 'Space Tourism Destination')

@section('bodyClass', 'page destination')

@section('content')

    <h1 class="title5 page_title"><strong>01</strong>{{ __("destinationH1") }}</h1>

    <div class="planet_body main">

        <div class="planet_picture picture">
            @foreach ($planets as $planet)
                <img data-name="{{$planet->name}}" class="{{ $loop->first ? 'active' : 'hidden' }}" src="{{asset($planet->picture)}}" alt="{{$planet->name}}">
            @endforeach
        </div>

        <div class="planet_content">
            <div class="navbar">
                <nav class="nav_bar_planet navigation">
                    <ul class="nav_bar_planet_list ">
                        @foreach ($planets as $planet)
                            <li><button class="button navigation {{ $loop->first ? 'active' : 'hidden' }}" data-name="{{$planet->name}}">{{$planet->name}}</button></li>
                        @endforeach
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
        </div>
    </div>

@endsection
