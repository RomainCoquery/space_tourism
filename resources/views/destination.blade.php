<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>Space Tourism Destination</title>
</head>

<body class="page destination">

    @include('layouts.header')

    <h1 class="title5 page_title"><strong>01</strong> Choisissez votre destination</h1>

    <div class="planet_body">

        <div class="planet_picture">
                <img data-planet="moon" class="active" src="{{ asset('img/moon.png') }}" alt="Lune">
                <img data-planet="mars" class="hidden" src="{{ asset('img/mars.png') }}" alt="Mars">
                <img data-planet="europe" class="hidden" src="{{ asset('img/europe.png') }}" alt="Europe">
                <img data-planet="titan" class="hidden" src="{{ asset('img/titan.png') }}" alt="Titan">
            </div>

        <div class="planet_content">

            <div class="navbar">
                <nav class="nav_bar_planet navigation">
                    <ul class="nav_bar_planet_list ">
                        <li><button class="button active navigation" data-planet="moon">Lune</button></li>
                        <li><button class="button hidden navigation" data-planet="mars">Mars</button></li>
                        <li><button class="button hidden navigation" data-planet="europe">Europe</button></li>
                        <li><button class="button hidden navigation" data-planet="titan">Titan</button></li>
                    </ul>
                </nav>
            </div>

            <!-- Contenu de la lune -->
            <div data-planet="moon" class="planet_description active">
                <h2 class="title2">Lune</h2>
                <p class="body">Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué. Pendant que vous y êtes, plongez-vous dans l'histoire en visitant les sites d'atterrissages de Luna 2 et Apollo 11.</p>
                <div class="line">
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
                            <li class="subtitle2">Durée</li>
                            <li></li>
                            <li class="subtitle1">3 Jours</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contenu de mars -->
            <div data-planet="mars" class="planet_description hidden">
                <h2 class="title2">Mars</h2>
                <p class="body">N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demi la taille de l'Everest !</p>
                <div class="line">
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
                            <li class="subtitle2">Durée</li>
                            <li class="subtitle1">9 Mois</li>
                        </ul>
                    </div>
                </div>
            </div>
                
            <!-- Contenu d'europe -->
            <div data-planet="europe" class="planet_description hidden">
                <h2 class="title2">Europe</h2>
                <p class="body">La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détendre dans votre confortable chalet hivernal.</p>
                <div class="line">
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
                            <li class="subtitle2">Durée</li>
                            <li class="subtitle1">3 Ans</li>
                        </ul>
                    </div>
                </div>
            </div>
                        
            <!-- Contenu de titan -->
            <div data-planet="titan" class="planet_description hidden">
                <h2 class="title2">Titan</h2>
                <p class="body">La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la maison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.</p>
                <div class="line">
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
                            <li class="subtitle2">Durée</li>
                            <li class="subtitle1">7 Ans</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>