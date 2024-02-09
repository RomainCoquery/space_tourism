
@extends('layouts.layout')

@section('title', 'Space Tourism Crew')

@section('bodyClass', 'page crew')

@section('content')

    <div class="crew_body main">

        <div class="crew_content">

            <h1 class="title5 page_title"><strong>02</strong>{{ __("crewH1") }}</h1>

            <!-- Contenu du membre d'équipage -->
            @foreach ($crews as $crew)
                <div data-name="{{$crew->name}}" class=" crew_description description {{ $loop->first ? 'active' : 'hidden' }}">
                    <h2 class="title4">{{ $crew->job }}</h2>
                    <h3 class="title3">{{ $crew->name }}</h3>
                    <p class="body">{{ $crew->description }}</p>
                </div>
            @endforeach

            <div class="navbar">
                <nav class="nav_bar_crew navigation">
                    <ul class="nav_bar_crew_list ">
                        @foreach ($crews as $crew)
                            <li><button class="button navigation {{ $loop->first ? 'active' : 'hidden' }}" data-name="{{$crew->name}}">&bull;</button></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>

        <div class="crew_picture picture">
            @foreach ($crews as $crew)
                <img data-name="{{$crew->name}}" class="{{ $loop->first ? 'active' : 'hidden' }}" src="{{asset($crew->picture)}}" alt="{{$crew->name}}">
            @endforeach
        </div>
    </div>

@endsection
