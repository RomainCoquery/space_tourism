@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-light bg-gradient">
        <h1 class="mb-4">bienvenue dans le backoffice</h1>
    </div>
    <div class="container mt-4 bg-light bg-gradient">
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Déconnexion</button>
            </form>
        @endauth
    </div>

@endsection