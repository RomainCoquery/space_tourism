@extends('backoffice.layouts.layout')

@section('content')


<div class="container mt-4 bg-light bg-gradient">

    @if(isset($planet))
        <h1 class="mb-4">Modifier la planète {{ $planet->fr_name }}</h1>

        <form action="{{ route('destination.update', $planet->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PUT')

            @include('backoffice.destination.partials.form')

            <button type="submit" class="btn btn-primary">Modifier la planète</button>
        </form>
    @endif

    <a href="{{ route('destination.index') }}">Revenir à l'index</a>
</div>

@endsection