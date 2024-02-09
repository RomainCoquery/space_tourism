
@extends('layouts.layout')

@section('title', 'Space Tourism Technology')

@section('bodyClass', 'page technology')

@section('content')

    <h1 class="title5 page_title"><strong>03</strong>{{ __("technologyH1") }}</h1>

    <div class="technology_body main">

        <div class="navbar">
            <nav class="nav_bar_technology navigation">
                <ul class="nav_bar_technology_list ">
                    @foreach ($technologies as $technology)
                            <li><button class="button title4 {{ $loop->first ? 'active' : 'hidden' }}" data-name="{{$technology->name}}">{{$technology->id}}</button></li>
                        @endforeach
                </ul>
            </nav>
        </div>

        <div class="technology_content">

            <!-- Contenu de la technologie -->
            @foreach ($technologies as $technology)
                <div data-name="{{$technology->name}}" class="technology_description description {{ $loop->first ? 'active' : 'hidden' }}">
                    <h2 class="navigation">{{ __("terminology") }}</h2>
                    <h3 class="title3">{{$technology->name}}</h3>
                    <p class="body">{{$technology->description}}</p>
                </div>
            @endforeach
        </div>

        <div class="technology_picture picture">
            @foreach ($technologies as $technology)
                <img data-name="{{$technology->name}}" class="{{ $loop->first ? 'active' : 'hidden' }}" src="{{asset($technology->picture)}}" alt="{{$technology->name}}">
            @endforeach
        </div>
        
    </div>

@endsection
