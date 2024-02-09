@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>{{ $planet->en_name }}</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Planet name :</strong> {{ $planet->en_name }}
                </div>
                <div class="mb-3">
                    <strong>Nom de la planète :</strong> {{ $planet->fr_name }}
                </div>
                <div class="mb-3">
                    <strong>Description (anglais) :</strong><br> {{ $planet->en_description }}
                </div>
                <div class="mb-3">
                    <strong>Description (français) :</strong><br> {{ $planet->fr_description }}
                </div>
                <div class="mb-3">
                    <strong>Distance :</strong> {{ $planet->distance }} {{ $planet->distance_unit }}
                </div>
                <div class="mb-3">
                    <strong>Durée :</strong> {{ $planet->duration }}
                    <p class="d-inline">(Anglais :{{ $planet->en_duration_unit }})</p>
                    <p class="d-inline">(Français :{{ $planet->fr_duration_unit }})</p>
                </div>
                <div class="mb-3">
                    <strong>Image :</strong><br> <img src="{{ asset($planet->picture) }}" alt="{{ $planet->en_name }}" style="max-width: 300px;">
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('destination.index') }}" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </div>
@endsection