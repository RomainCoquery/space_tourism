<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Space Tourism Accueil</title>
</head>

<body class="page home">

    @include('layouts.header')

    <div class="page_body">
        <div class="home_body_text">
            <h5 class="title5">donc vous voulez voyager dans</h5>
            <h1 class="title1">l'espace</h1>
            <p class="body">Soyons objectif; si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci. Eh bien, asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire!</p>
        </div>

        <div class="home_body_button circle circle1">
            <a href="#">Explorer</a>
        </div>
    </div>
</body>
</html>