@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-light bg-gradient">
        <h1 class="mb-4">Confirmation de suppression de la technologie</h1>
        <p>Êtes-vous sûr de vouloir supprimer la technologie {{ $technology->fr_name }}?</p>
        <form class="card mb-4 bg-danger" method="POST" action="{{ route('technology.destroy', $technology->id) }}">
            @csrf
            @method('DELETE')
            <button class="bg-danger" type="submit">Confirmer la suppression</button>
        </form>
        <a href="{{ route('technology.index') }}">Revenir à l'index</a>
    </div>
@endsection