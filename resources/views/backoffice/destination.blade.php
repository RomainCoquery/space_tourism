
@extends('backoffice.layouts.layout')

<body>
    @section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Backoffice des destinations</h1>

        {{-- Formulaire pour l'ajout --}}
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Ajouter une planète</h2>
                <form action="{{ route('destination.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- ... (champs du formulaire pour l'ajout) --}}
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>

        {{-- Liste des planètes existantes --}}
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Liste des planètes</h2>
                <ul class="list-group">
                    @foreach($planets as $planet)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $planet->en_name }}
                            <div class="btn-group" role="group" aria-label="Actions">
                                {{-- Lien pour afficher les détails --}}
                                <a href="{{ route('destination.show', ['id' => $planet->id]) }}" class="btn btn-info btn-sm">Voir</a>
                                {{-- Lien pour éditer --}}
                                <a href="{{ route('destination.edit', ['id' => $planet->id]) }}" class="btn btn-warning btn-sm">Éditer</a>
                                {{-- Formulaire pour supprimer --}}
                                <form action="{{ route('destination.destroy', ['id' => $planet->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Détails d'une planète (affiché lors de l'édition ou de l'affichage) --}}
        @if(isset($planet))
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Détails de la planète</h2>
                    {{-- Affiche les détails de la planète --}}
                    {{-- ... --}}
                </div>
            </div>
        @endif
        </div>@section('content')
        <div class="container mt-4">
            <h1 class="mb-4">Backoffice des destinations</h1>

            {{-- Formulaire pour l'ajout --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Ajouter une planète</h2>
                    <form action="{{ route('destination.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- ... (champs du formulaire pour l'ajout) --}}
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>

            {{-- Liste des planètes existantes --}}
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Liste des planètes</h2>
                    <ul class="list-group">
                        @foreach($planets as $planet)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $planet->en_name }}
                                <div class="btn-group" role="group" aria-label="Actions">
                                    {{-- Lien pour afficher les détails --}}
                                    <a href="{{ route('destination.show', ['id' => $planet->id]) }}" class="btn btn-info btn-sm">Voir</a>
                                    {{-- Lien pour éditer --}}
                                    <a href="{{ route('destination.edit', ['id' => $planet->id]) }}" class="btn btn-warning btn-sm">Éditer</a>
                                    {{-- Formulaire pour supprimer --}}
                                    <form action="{{ route('destination.destroy', ['id' => $planet->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Détails d'une planète (affiché lors de l'édition ou de l'affichage) --}}
            @if(isset($planet))
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Détails de la planète</h2>
                        {{-- Affiche les détails de la planète --}}
                        {{-- ... --}}
                    </div>
                </div>
            @endif
        </div>
    @endsection
</body>
