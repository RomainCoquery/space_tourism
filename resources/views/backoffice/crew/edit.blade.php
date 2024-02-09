@extends('backoffice.layouts.layout')

@section('content')


<div class="container mt-4 bg-light bg-gradient">

    @if(isset($crew))
        <h1 class="mb-4">Modifier le membre d'équipage {{ $crew->fr_name }}</h1>

        <form action="{{ route('crew.update', $crew->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PUT')

            @include('backoffice.crew.partials.form')

            <button type="submit" class="btn btn-primary">Modifier le membre d'équipage</button>
        </form>
    @endif

    <a href="{{ route('crew.index') }}">Revenir à l'index</a>
</div>

@endsection