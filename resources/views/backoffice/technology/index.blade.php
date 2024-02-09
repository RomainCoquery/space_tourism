@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-dark">
        <h1 class="mb-4">Backoffice des technologies</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Formulaire pour l'ajout --}}
        <div class="card mb-4 bg-secondary bg-gradient">
            <div class="card-body">
                <h2 class="card-title">Ajouter une technologie</h2>
                <a href="{{ route('technology.add') }}" class="btn btn-success btn-sm">Ajouter</a>
            </div>
        </div>

        {{-- Liste des technologies existantes --}}
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Liste des technologies</h2>
                @foreach($technologies as $technology)
                    <table class="list-group">
                        <tbody class="list-group-item">
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Nom de la technologie</th>
                                <td class="w-75">{{$technology->fr_name}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Technology name</th>
                                <td class="w-75">{{$technology->en_name}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Description Français</th>
                                <td class="w-75">{{$technology->fr_description}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">English description</th>
                                <td class="w-75">{{$technology->en_description}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Image</th>
                                <td class="w-75">{{$technology->picture}}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- les boutons d'action --}}
                    <div class="btn-group" role="group" aria-label="Actions">
                        <a href="{{ route('technology.show', ['id' => $technology->id]) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('technology.edit', ['id' => $technology->id]) }}" class="btn btn-warning btn-sm">Éditer</a>
                        <a href="{{ route('technology.delete', ['id' => $technology->id]) }}" class="btn btn-danger btn-sm">Supprimer</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
