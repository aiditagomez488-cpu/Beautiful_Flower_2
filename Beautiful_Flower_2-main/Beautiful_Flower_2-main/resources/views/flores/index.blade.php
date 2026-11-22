@extends('layouts.app')

@section('content')
    <style>
        .floral-hero {
            background: radial-gradient(circle at 80% 35%, rgba(244, 184, 200, 0.24), transparent 55%),
                        linear-gradient(135deg, #24161a 0%, #3b232a 65%, #4d2d36 100%);
            border: 1.5px solid rgba(244, 184, 200, 0.55);
            box-shadow: 0 0 28px rgba(244, 184, 200, 0.22), 0 18px 40px rgba(36, 22, 26, 0.14);
            border-radius: 28px;
            color: #fff6f8;
        }

        .floral-hero .eyebrow {
            color: var(--pink-accent);
            font-size: 0.78rem;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            font-weight: 600;
        }

        .flower-card {
            background: var(--bg-card);
            border: 1px solid var(--border-soft);
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 10px 26px rgba(58, 35, 42, 0.06);
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .flower-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 34px rgba(217, 130, 155, 0.18);
        }

        .flower-card-img {
            height: 210px;
            width: 100%;
            object-fit: cover;
        }

        .badge-floral {
            background-color: var(--bg-soft);
            color: var(--hero-mid);
            border: 1px solid var(--border-soft);
            border-radius: 999px;
            font-weight: 500;
            font-size: 0.78rem;
            padding: 0.3rem 0.75rem;
        }
    </style>

    <div class="floral-hero p-4 p-md-5 mb-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="eyebrow mb-2">Colección botánica</div>
                <h1 class="display-5 fw-bold mb-2">Catálogo de flores</h1>
                <p class="mb-0" style="color: #ead5dc; max-width: 560px;">
                    Explora tus flores registradas, revisa su temporada y color, o añade nuevas especies con su fotografía.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('flores.create') }}" class="btn btn-pink-pill">+ Nueva flor</a>
            </div>
        </div>
    </div>

    @if($flores->isEmpty())
        <div class="floral-panel p-5 text-center">
            <h2 class="h3 mb-2">Todavía no hay flores en el catálogo</h2>
            <p class="text-muted mb-4">Empieza agregando la primera flor con su nombre, color, temporada y foto.</p>
            <a href="{{ route('flores.create') }}" class="btn btn-pink-pill">+ Agregar mi primera flor</a>
        </div>
    @else
        <div class="row g-4">
            @foreach($flores as $flor)
                <div class="col-sm-6 col-lg-4">
                    <div class="flower-card h-100 d-flex flex-column">
                        <img src="{{ $flor->imagen_url }}" alt="{{ $flor->nombre }}" class="flower-card-img">
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                <span class="badge-floral">{{ $flor->color }}</span>
                                <span class="badge-floral">{{ $flor->temporada }}</span>
                            </div>
                            <h2 class="h4 fw-bold mb-2">{{ $flor->nombre }}</h2>
                            <p class="small mb-4 flex-grow-1" style="color: var(--text-muted);">
                                {{ \Illuminate\Support\Str::limit($flor->descripcion ?: 'Sin descripción añadida.', 105) }}
                            </p>
                            <div class="d-flex flex-wrap gap-2 pt-2 border-top" style="border-color: var(--border-soft) !important;">
                                <a href="{{ route('flores.show', $flor) }}" class="btn btn-sm btn-soft-outline px-3">Ver</a>
                                <a href="{{ route('flores.edit', $flor) }}" class="btn btn-sm btn-soft-outline px-3">Editar</a>
                                <form action="{{ route('flores.destroy', $flor) }}" method="POST" class="ms-auto">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-sm btn-outline-danger rounded-pill px-3"
                                            onclick="return confirm('¿Eliminar esta flor?')">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection