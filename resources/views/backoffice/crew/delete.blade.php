@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-light bg-gradient">
        <h1 class="mb-4">Confirmation de suppression du membre d'équipage</h1>
        <p>Êtes-vous sûr de vouloir supprimer le membre d'équipage {{ $crew->name }}?</p>
        <form class="card mb-4 bg-danger" method="POST" action="{{ route('crew.destroy', $crew->id) }}">
            @csrf
            @method('DELETE')
            <button class="bg-danger" type="submit">Confirmer la suppression</button>
        </form>
        <a href="{{ route('crew.index') }}">Revenir à l'index</a>
    </div>
@endsection