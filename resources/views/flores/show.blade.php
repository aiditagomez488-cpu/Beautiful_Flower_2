@extends('layouts.app')

@section('content')
    <div class="floral-panel overflow-hidden">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ $flor->imagen_url }}" alt="{{ $flor->nombre }}" class="w-100 h-100" style="min-height: 280px; max-height: 420px; object-fit: cover;">
            </div>
            <div class="col-md-7 p-4 p-md-5 d-flex flex-column justify-content-center">
                <h1 class="display-5 fw-bold mb-3">{{ $flor->nombre }}</h1>
                <p class="mb-2"><strong>Color:</strong> {{ $flor->color }}</p>
                <p class="mb-2"><strong>Temporada:</strong> {{ $flor->temporada }}</p>
                <p class="mb-4" style="color: var(--text-muted);">
                    <strong>Descripción:</strong> {{ $flor->descripcion ?: 'Sin descripción.' }}
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('flores.edit', $flor) }}" class="btn btn-pink-pill">Editar</a>
                    <a href="{{ route('flores.index') }}" class="btn btn-soft-outline px-4">Volver al catálogo</a>
                </div>
            </div>
        </div>
    </div>
@endsection