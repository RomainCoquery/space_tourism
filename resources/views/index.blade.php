<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>Space Tourism Accueil</title>
</head>

<body class="page home">

    @include('layouts.header')

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
</body>
</html>