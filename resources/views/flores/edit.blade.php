@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="floral-panel p-4 p-md-5">
                <h1 class="display-6 fw-bold mb-4">Editar flor</h1>

                @if($errors->any())
                    <div class="alert alert-danger rounded-4">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('flores.update', $flor) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-medium">Nombre</label>
                        <input type="text" name="nombre" value="{{ old('nombre', $flor->nombre) }}" class="form-control rounded-3" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-medium">Color</label>
                            <input type="text" name="color" value="{{ old('color', $flor->color) }}" class="form-control rounded-3" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-medium">Temporada</label>
                            <input type="text" name="temporada" value="{{ old('temporada', $flor->temporada) }}" class="form-control rounded-3" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-medium">Fotografía actual</label>
                        <div class="mb-2">
                            <img src="{{ $flor->imagen_url }}" alt="{{ $flor->nombre }}" class="rounded-4 border" style="max-height: 170px; object-fit: cover;">
                        </div>
                        <input type="file" name="imagen" accept="image/*" class="form-control rounded-3">
                        <div class="form-text">Sube otra imagen solo si deseas reemplazar la actual.</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-medium">Descripción</label>
                        <textarea name="descripcion" rows="3" class="form-control rounded-3">{{ old('descripcion', $flor->descripcion) }}</textarea>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-pink-pill">Actualizar</button>
                        <a href="{{ route('flores.index') }}" class="btn btn-soft-outline px-4">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection