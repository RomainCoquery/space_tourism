@extends('backoffice.layouts.layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>{{ $crew->name }}</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Description (anglais) :</strong><br> {{ $crew->en_description }}
                </div>
                <div class="mb-3">
                    <strong>Description (français) :</strong><br> {{ $crew->fr_description }}
                </div>
                <div class="mb-3">
                    <strong>Fonction occupée :</strong><br>
                    <p class="d-inline">(Anglais :{{ $crew->en_job }})</p>
                    <p class="d-inline">(Français :{{ $crew->fr_job }})</p>
                </div>
                <div class="mb-3">
                    <strong>Image :</strong><br> <img src="{{ asset($crew->picture) }}" alt="{{ $crew->name }}" style="max-width: 300px;">
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('crew.index') }}" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </div>
@endsection