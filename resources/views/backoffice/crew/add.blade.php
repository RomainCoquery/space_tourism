@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-light bg-gradient">
        <h1 class="mb-4">Ajouter un membre d'équipage</h1>

        <form action="{{ route('crew.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('backoffice.crew.partials.form')

            <button type="submit" class="btn btn-primary">Ajouter le membre d'équipage</button>
        </form>
        <a href="{{ route('crew.index') }}">Revenir à l'index</a>
    </div>
@endsection