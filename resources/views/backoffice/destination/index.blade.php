@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-dark">
        <h1 class="mb-4">Backoffice des destinations</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Formulaire pour l'ajout --}}
        <div class="card mb-4 bg-secondary bg-gradient">
            <div class="card-body">
                <h2 class="card-title">Ajouter une planète</h2>
                <a href="{{ route('destination.add') }}" class="btn btn-success btn-sm">Ajouter</a>
            </div>
        </div>

        {{-- Liste des planètes existantes --}}
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Liste des planètes</h2>
                @foreach($planets as $planet)
                    <table class="list-group">
                        <tbody class="list-group-item">
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Planète nom</th>
                                <td class="w-75">{{$planet->fr_name}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Planet name</th>
                                <td class="w-75">{{$planet->en_name}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Description Français</th>
                                <td class="w-75">{{$planet->fr_description}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">English description</th>
                                <td class="w-75">{{$planet->en_description}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Distance</th>
                                <td class="w-75">{{$planet->distance}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Mesure distance</th>
                                <td class="w-75">{{$planet->distance_unit}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">durée</th>
                                <td class="w-75">{{$planet->duration}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">unité de durée</th>
                                <td class="w-75">{{$planet->fr_duration_unit}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">duration unit</th>
                                <td class="w-75">{{$planet->en_duration_unit}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Image</th>
                                <td class="w-75">{{$planet->picture}}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- les boutons d'action --}}
                    <div class="btn-group" role="group" aria-label="Actions">
                        <a href="{{ route('destination.show', ['id' => $planet->id]) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('destination.edit', ['id' => $planet->id]) }}" class="btn btn-warning btn-sm">Éditer</a>
                        <a href="{{ route('destination.delete', ['id' => $planet->id]) }}" class="btn btn-danger btn-sm">Supprimer</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
