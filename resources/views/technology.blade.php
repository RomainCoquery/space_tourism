<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>Space Tourism Technology</title>
</head>

<body class="page technology">

    @include('layouts.header')

    <h1 class="title5 page_title"><strong>03</strong> Lancement spatial 101</h1>

    <div class="technology_body main">

        <div class="navbar">
            <nav class="nav_bar_technology navigation">
                <ul class="nav_bar_technology_list ">
                    <li><button class="button active title4" data-name="lanceur">1</button></li>
                    <li><button class="button hidden title4" data-name="spatioport">2</button></li>
                    <li><button class="button hidden title4" data-name="capsule">3</button></li>
                </ul>
            </nav>
        </div>

        <div class="technology_content">

            <!-- Contenu de lanceur -->
            <div data-name="lanceur" class="technology_description description active">
                <h2 class="navigation">La terminologie...</h2>
                <h3 class="title3">Le lanceur</h3>
                <p class="body">Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !</p>
            </div>

            <!-- Contenu de spatioport -->
            <div data-name="spatioport" class="technology_description description hidden">
                <h2 class="navigation">La terminologie...</h2>
                <h3 class="title3">Le spatioport</h3>
                <p class="body">Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.</p>
            </div>
                
            <!-- Contenu de capsule -->
            <div data-name="capsule" class="technology_description description hidden">
                <h2 class="navigation">La terminologie...</h2>
                <h3 class="title3">La capsule spatiale</h3>
                <p class="body">Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir</p>
            </div>
        </div>

        <div class="technology_picture picture">
            <img class="rocket active" data-name="lanceur" class="active" src="{{ asset('img/rocket.jpg') }}" alt="lanceur">
            <img class="launcher hidden" data-name="spatioport" class="hidden" src="{{ asset('img/launcher.jpg') }}" alt="spatioport">
            <img class="capsule hidden" data-name="capsule" class="hidden" src="{{ asset('img/capsule.jpg') }}" alt="capsule">
        </div>
    </div>
</body>
</html>