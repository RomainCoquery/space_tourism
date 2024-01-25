<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>Space Tourism Technology</title>
</head>

<body class="page technology">

    @include('layouts.header')

    <h1 class="title5 page_title"><strong>03</strong>{{ __("technologyH1") }}</h1>

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
                <h2 class="navigation">{{ __("terminology") }}</h2>
                <h3 class="title3">{{ __("launcher") }}</h3>
                <p class="body">{{ __("launcherText") }}</p>
            </div>

            <!-- Contenu de spatioport -->
            <div data-name="spatioport" class="technology_description description hidden">
                <h2 class="navigation">{{ __("terminology") }}</h2>
                <h3 class="title3">{{ __("spacePort") }}</h3>
                <p class="body">{{ __("spacePortText") }}</p>
            </div>
                
            <!-- Contenu de capsule -->
            <div data-name="capsule" class="technology_description description hidden">
                <h2 class="navigation">{{ __("terminology") }}</h2>
                <h3 class="title3">{{ __("spaceCapsule") }}</h3>
                <p class="body">{{ __("spaceCapsuleText") }}</p>
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