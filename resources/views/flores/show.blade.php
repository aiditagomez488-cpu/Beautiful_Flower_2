@extends('layouts.app')

@section('content')
    <h1>{{ $flor->nombre }}</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Color:</strong> {{ $flor->color }}</li>
        <li class="list-group-item"><strong>Temporada:</strong> {{ $flor->temporada }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $flor->descripcion }}</li>
    </ul>
    <a href="{{ route('flores.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection