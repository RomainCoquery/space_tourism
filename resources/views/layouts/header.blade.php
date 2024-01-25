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
        <div class="language-selector">
            <form action="{{ route('changeLang', 'en') }}" method="post">
                @csrf
                <button type="submit">
                    <img src="img/flag-usa.jpg" alt="English">
                </button>
            </form>
            
            <form action="{{ route('changeLang', 'fr') }}" method="post">
                @csrf
                <button type="submit">
                    <img src="img/flag-france.jpg" alt="Français">
                </button>
            </form>
        </div>

        <ul class="nav_top_list navigation">
            <li><a class= "navigation {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}"><strong>00</strong>{{ __("home") }}</a></li>
            <li><a class="navigation {{ Request::is('destination') ? 'active' : '' }}" href="{{ url('/destination') }}"><strong>01</strong>{{ __("destination") }}</a></li>
            <li><a class="navigation {{ Request::is('crew') ? 'active' : '' }}" href="{{ url('/crew') }}"><strong>02</strong>{{ __("crew") }}</a></li>
            <li><a class="navigation {{ Request::is('technology') ? 'active' : '' }}" href="{{ url('/technology') }}"><strong>03</strong>{{ __("technology") }}</a></li>
        </ul>
    </nav>
</header>
