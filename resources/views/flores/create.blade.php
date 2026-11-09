@extends('layouts.app')

@section('content')
    <h1>Agregar flor</h1>
    <form action="{{ route('flores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Color</label>
            <input type="text" name="color" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Temporada</label>
            <input type="text" name="temporada" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection