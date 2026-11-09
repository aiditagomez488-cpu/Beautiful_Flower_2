@extends('layouts.app')

@section('content')
    <h1>Editar flor</h1>
    <form action="{{ route('flores.update', $flor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" value="{{ $flor->nombre }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Color</label>
            <input type="text" name="color" value="{{ $flor->color }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Temporada</label>
            <input type="text" name="temporada" value="{{ $flor->temporada }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $flor->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
@endsection