<!-- resources/layouts/header.blade.php -->

<header>
    <div class="logo">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo de space tourism">
    </div>

    <div class="line">
        <img src="{{ asset('img/decoration.png') }}" alt="Decoration">
    </div>

    <div id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav id="menu" class="nav_top navigation">
        <ul class="nav_top_list navigation">
            <li><a class= "navigation {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}"><strong>00</strong> Accueil</a></li>
            <li><a class="navigation {{ Request::is('destination') ? 'active' : '' }}" href="{{ url('/destination') }}"><strong>01</strong> Destination</a></li>
            <li><a class="navigation {{ Request::is('crew') ? 'active' : '' }}" href="{{ url('/crew') }}"><strong>02</strong>Equipage</a></li>
            <li><a class="navigation {{ Request::is('technology') ? 'active' : '' }}" href="{{ url('/technology') }}"><strong>03</strong>Technologie</a></li>
        </ul>
    </nav>
</header>
