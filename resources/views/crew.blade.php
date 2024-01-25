<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>Space Tourism Crew</title>
</head>

<body class="page crew">

    @include('layouts.header')

    <div class="crew_body main">

        <div class="crew_content">

            <h1 class="title5 page_title"><strong>02</strong>{{ __("crewH1") }}</h1>

            <!-- Contenu de douglas -->
            <div data-name="douglas" class="crew_description description active">
                <h2 class="title4">{{ __("commander") }}</h2>
                <h3 class="title3">Douglas Hurley</h3>
                <p class="body">{{ __("douglasText") }}</p>
            </div>

            <!-- Contenu de shuttleworth -->
            <div data-name="shuttleworth" class="crew_description description hidden">
                <h2 class="title4">{{ __("missionSpecialist") }}</h2>
                <h3 class="title3">Mark Shuttleworth</h3>
                <p class="body">{{ __("markText") }}</p>
            </div>

            <!-- Contenu de glover -->
            <div data-name="glover" class="crew_description description hidden">
                <h2 class="title4">{{ __("pilot") }}</h2>
                <h3 class="title3">Victor Glover</h3>
                <p class="body">{{ __("victorText") }}</p>
            </div>
                        
            <!-- Contenu d'ansari -->
            <div data-name="ansari" class="crew_description description hidden">
                <h2 class="title4">{{ __("flightEngineer") }}</h2>
                <h3 class="title3">Anousheh Ansari</h3>
                <p class="body">{{ __("ansariText") }}</p>
            </div>

            <div class="navbar">
                <nav class="nav_bar_crew navigation">
                    <ul class="nav_bar_crew_list ">
                        <li><button class="button active navigation" data-name="douglas">&bull;</button></li>
                        <li><button class="button hidden navigation" data-name="shuttleworth">&bull;</button></li>
                        <li><button class="button hidden navigation" data-name="glover">&bull;</button></li>
                        <li><button class="button hidden navigation" data-name="ansari">&bull;</button></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="crew_picture picture">
            <img data-name="douglas" class="active" src="{{ asset('img/douglas.png') }}" alt="Douglas">
            <img data-name="shuttleworth" class="hidden" src="{{ asset('img/shuttleworth.png') }}" alt="Shuttleworth">
            <img data-name="glover" class="hidden" src="{{ asset('img/glover.png') }}" alt="Glover">
            <img data-name="ansari" class="hidden" src="{{ asset('img/ansari.png') }}" alt="Ansari">
        </div>
    </div>
</body>
</html>