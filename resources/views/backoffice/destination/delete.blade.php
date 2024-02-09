@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-light bg-gradient">
        <h1 class="mb-4">Confirmation de suppression de la planète</h1>
        <p>Êtes-vous sûr de vouloir supprimer la planète {{ $planet->en_name }}?</p>
        <form class="card mb-4 bg-danger" method="POST" action="{{ route('destination.destroy', $planet->id) }}">
            @csrf
            @method('DELETE')
            <button class="bg-danger" type="submit">Confirmer la suppression</button>
        </form>
        <a href="{{ route('destination.index') }}">Revenir à l'index</a>
    </div>
@endsection