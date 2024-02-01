<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <title>@yield('title', 'Space Tourism')</title>
</head>

<body class="@yield('bodyClass')">

    @include('components.header')

    @yield('content')

</body>
</html>