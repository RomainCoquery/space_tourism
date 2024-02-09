@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-light bg-gradient">
        <h1 class="mb-4">Ajouter une technologie</h1>

        <form action="{{ route('technology.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('backoffice.technology.partials.form')

            <button type="submit" class="btn btn-primary">Ajouter la technologie</button>
        </form>
        <a href="{{ route('technology.index') }}">Revenir à l'index</a>
    </div>
@endsection