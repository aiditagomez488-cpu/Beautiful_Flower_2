@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="floral-panel p-4 p-md-5">
                <span class="badge-floral d-inline-block mb-2" style="background: var(--bg-soft); color: var(--hero-mid); padding: 0.25rem 0.75rem; border-radius: 999px; font-size: 0.8rem;">
                    Nuevo registro
                </span>
                <h1 class="display-6 fw-bold mb-4">Agregar flor</h1>

                @if($errors->any())
                    <div class="alert alert-danger rounded-4">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('flores.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-medium">Nombre</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control rounded-3" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-medium">Color</label>
                            <input type="text" name="color" value="{{ old('color') }}" class="form-control rounded-3" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-medium">Temporada</label>
                            <input type="text" name="temporada" value="{{ old('temporada') }}" class="form-control rounded-3" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-medium">Fotografía de la flor</label>
                        <input type="file" name="imagen" id="imagenInput" accept="image/*" class="form-control rounded-3">
                        <div class="form-text">Formatos permitidos: JPG, PNG o WEBP (máx. 2 MB).</div>
                        <div class="mt-3 d-none" id="previewBox">
                            <img id="previewImg" src="#" alt="Vista previa" class="rounded-4 border" style="max-height: 190px; object-fit: cover;">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-medium">Descripción</label>
                        <textarea name="descripcion" rows="3" class="form-control rounded-3">{{ old('descripcion') }}</textarea>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-pink-pill">Guardar flor</button>
                        <a href="{{ route('flores.index') }}" class="btn btn-soft-outline px-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('imagenInput')?.addEventListener('change', function (e) {
            const file = e.target.files[0];
            const box = document.getElementById('previewBox');
            const img = document.getElementById('previewImg');
            if (file) {
                img.src = URL.createObjectURL(file);
                box.classList.remove('d-none');
            } else {
                box.classList.add('d-none');
            }
        });
    </script>
@endsection