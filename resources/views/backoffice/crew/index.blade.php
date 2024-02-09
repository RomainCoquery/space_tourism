@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-dark">
        <h1 class="mb-4">Backoffice des membres d'équipage</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Formulaire pour l'ajout --}}
        <div class="card mb-4 bg-secondary bg-gradient">
            <div class="card-body">
                <h2 class="card-title">Ajouter un membres d'équipage</h2>
                <a href="{{ route('crew.add') }}" class="btn btn-success btn-sm">Ajouter</a>
            </div>
        </div>

        {{-- Liste des membres d'équipage existants --}}
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Liste des membres d'équipage</h2>
                @foreach($crews as $crew)
                    <table class="list-group">
                        <tbody class="list-group-item">
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Nom du membre d'équipage</th>
                                <td class="w-75">{{$crew->name}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Description Français</th>
                                <td class="w-75">{{$crew->fr_description}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">English description</th>
                                <td class="w-75">{{$crew->en_description}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Emploi</th>
                                <td class="w-75">{{$crew->fr_job}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Job</th>
                                <td class="w-75">{{$crew->en_job}}</td>
                            </tr>
                            <tr class="border border-1 d-flex">
                                <th scope="row" class="w-25">Image</th>
                                <td class="w-75">{{$crew->picture}}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- les boutons d'action --}}
                    <div class="btn-group" role="group" aria-label="Actions">
                        <a href="{{ route('crew.show', ['id' => $crew->id]) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('crew.edit', ['id' => $crew->id]) }}" class="btn btn-warning btn-sm">Éditer</a>
                        <a href="{{ route('crew.delete', ['id' => $crew->id]) }}" class="btn btn-danger btn-sm">Supprimer</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
