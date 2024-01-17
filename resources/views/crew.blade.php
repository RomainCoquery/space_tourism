<!DOCTYPE html>
<html lang="en">
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

            <h1 class="title5 page_title"><strong>02</strong> Rencontrez l'équipage</h1>

            <!-- Contenu de douglas -->
            <div data-name="douglas" class="crew_description description active">
                <h2 class="title4">Commandant</h2>
                <h3 class="title3">Douglas</h3>
                <p class="body">Douglas Gérald Hurley est un ingénieur américain, un ancien pilote du Corps des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.</p>
            </div>

            <!-- Contenu de shuttleworth -->
            <div data-name="shuttleworth" class="crew_description description hidden">
                <h2 class="title4">Spécialiste de mission</h2>
                <h3 class="title3">Mark Shuttleworth</h3>
                <p class="body">Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l’espace en tant que touriste spatial.</p>
            </div>
                
            <!-- Contenu de glover -->
            <div data-name="glover" class="crew_description description hidden">
                <h2 class="title4">Pilote</h2>
                <h3 class="title3">Victor Glover</h3>
                <p class="body">Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expédition 64 et a servi comme ingénieur de vol des systèmes de station.</p>
            </div>
                        
            <!-- Contenu d'ansari -->
            <div data-name="ansari" class="crew_description description hidden">
                <h2 class="title4">Ingénieure de vol</h2>
                <h3 class="title3">Anousheh Ansari</h3>
                <p class="body">Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.</p>
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