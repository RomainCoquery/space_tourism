@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4 bg-light bg-gradient">
        <h1 class="mb-4">Ajouter une planète</h1>

        <form action="{{ route('destination.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('backoffice.destination.partials.form')

            <button type="submit" class="btn btn-primary">Ajouter la planète</button>
        </form>
        <a href="{{ route('destination.index') }}">Revenir à l'index</a>
    </div>
@endsection