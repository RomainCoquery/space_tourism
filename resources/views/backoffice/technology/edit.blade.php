@extends('backoffice.layouts.layout')

@section('content')


<div class="container mt-4 bg-light bg-gradient">

    @if(isset($technology))
        <h1 class="mb-4">Modifier la technologie {{ $technology->fr_name }}</h1>

        <form action="{{ route('technology.update', $technology->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PUT')

            @include('backoffice.technology.partials.form')

            <button type="submit" class="btn btn-primary">Modifier la technologie</button>
        </form>
    @endif

    <a href="{{ route('technology.index') }}">Revenir à l'index</a>
</div>

@endsection