
@extends('layouts.layout')

@section('title', 'Space Tourism Accueil')

@section('bodyClass', 'page home')

@section('content')

    <div class="page_body">

        <div class="home_body_text">
            <h1 class="title5">{{ __("homeH1") }}</h1>
            <h2 class="title1">{{ __("homeH2") }}</h2>
            <p class="body">{{ __("homeBody") }}</p>
        </div>

        <div class="home_body_button circle">
            <a href="{{ url('/destination') }}">{{ __("homeButton") }}</a>
        </div>

    </div>

@endsection
