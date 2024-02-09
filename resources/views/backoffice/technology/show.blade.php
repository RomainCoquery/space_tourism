@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>{{ $technology->en_name }}</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Technologie name :</strong> {{ $technology->en_name }}
                </div>
                <div class="mb-3">
                    <strong>Nom de la technologie :</strong> {{ $technology->fr_name }}
                </div>
                <div class="mb-3">
                    <strong>Description (anglais) :</strong><br> {{ $technology->en_description }}
                </div>
                <div class="mb-3">
                    <strong>Description (français) :</strong><br> {{ $technology->fr_description }}
                </div>
                <div class="mb-3">
                    <strong>Image :</strong><br> <img src="{{ asset($technology->picture) }}" alt="{{ $technology->en_name }}" style="max-width: 300px;">
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('technology.index') }}" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </div>
@endsection