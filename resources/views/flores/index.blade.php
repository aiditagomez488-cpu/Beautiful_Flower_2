@extends('layouts.app')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..700;1,400..700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* Decoración floral sutil en el fondo de la página */
        body {
            background-color: #fdf8f9;
            background-image:
                radial-gradient(circle at 12% 18%, rgba(244, 184, 200, 0.22), transparent 36%),
                radial-gradient(circle at 88% 28%, rgba(192, 132, 151, 0.16), transparent 40%),
                radial-gradient(circle at 50% 90%, rgba(216, 180, 160, 0.18), transparent 45%),
                url("data:image/svg+xml,%3Csvg width='140' height='140' viewBox='0 0 140 140' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23c08497' stroke-opacity='0.14' stroke-width='1.1'%3E%3Cpath d='M70 42 C62 24, 42 24, 42 42 C42 54, 58 60, 70 42 Z'/%3E%3Cpath d='M70 42 C78 24, 98 24, 98 42 C98 54, 82 60, 70 42 Z'/%3E%3Cpath d='M70 42 C54 52, 54 72, 70 74 C86 72, 86 52, 70 42 Z'/%3E%3Cpath d='M70 74 C66 96, 52 112, 34 122'/%3E%3Cpath d='M62 96 C46 92, 36 100, 42 110'/%3E%3Ccircle cx='70' cy='42' r='3.5' fill='%23c08497' fill-opacity='0.16'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
        }

        /* Banner en cuadro dentro del contenedor */
        .hero {
            position: relative;
            overflow: hidden;
            border-radius: 24px;
            min-height: 460px;
            margin-bottom: 2.5rem;
            background-image: linear-gradient(rgba(0, 0, 0, 0.22), rgba(0, 0, 0, 0.22)), url('{{ asset('images/banner-catalogo.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 44px 24px;
            border: 1px solid rgba(192, 132, 151, 0.35);
            box-shadow: 0 14px 32px rgba(74, 62, 61, 0.14);
        }

        .hero-text {
            position: relative;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 44px 38px;
            border-radius: 15px;
            max-width: 650px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            font-family: 'Poppins', sans-serif;
        }

        .hero-text h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 14px;
            color: #4a3e3d;
            font-weight: 700;
        }

        .hero-text p {
            font-size: 1.05rem;
            color: #665c5b;
            margin-bottom: 24px;
        }

        .hero-btn {
            display: inline-block;
            padding: 12px 30px;
            border: none;
            background-color: #c08497;
            color: #ffffff;
            border-radius: 25px;
            cursor: pointer;
            font-size: 0.95rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.25s;
        }

        .hero-btn:hover {
            background-color: #a85572;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(168, 85, 114, 0.28);
        }

        /* Cartas interactivas de flores */
        .flor-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(192, 132, 151, 0.28);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(4px);
            box-shadow: 0 8px 22px rgba(74, 62, 61, 0.06);
            transition: transform 0.28s cubic-bezier(0.22, 1, 0.36, 1),
                        box-shadow 0.28s cubic-bezier(0.22, 1, 0.36, 1),
                        border-color 0.28s ease;
        }

        .flor-card:hover {
            transform: translateY(-7px) scale(1.01);
            border-color: rgba(192, 132, 151, 0.7);
            box-shadow: 0 18px 36px rgba(168, 85, 114, 0.16);
        }

        .flor-img-wrap {
            position: relative;
            overflow: hidden;
            height: 215px;
            background-color: #f8eff2;
        }

        .flor-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.45s ease;
        }

        .flor-card:hover .flor-card-img {
            transform: scale(1.07);
        }

        .flor-nombre {
            font-family: 'Playfair Display', serif;
            color: #4a3e3d;
            text-align: center;
            transition: color 0.25s ease;
        }

        .flor-card:hover .flor-nombre {
            color: #a85572;
        }

        .flor-badge {
            background-color: #fdf2f5;
            color: #7d4b5d;
            border: 1px solid rgba(192, 132, 151, 0.35);
            white-space: normal;
            text-align: center;
            line-height: 1.35;
            max-width: 100%;
            border-radius: 14px !important;
            transition: background-color 0.25s ease, color 0.25s ease;
        }

        .flor-card:hover .flor-badge {
            background-color: #f6e1e8;
            color: #5c3141;
        }

        @media (max-width: 768px) {
            .hero {
                min-height: 380px;
            }

            .hero-text {
                padding: 32px 24px;
            }

            .hero-text h1 {
                font-size: 2rem;
            }
        }
    </style>

    <section class="hero">
        <div class="hero-text">
            <h1>Catálogo de flores</h1>
            <p>Explora tus flores registradas, revisa su temporada y color, o añade nuevas especies con su fotografía.</p>
            <a href="{{ route('flores.create') }}" class="hero-btn">+ Nueva flor</a>
        </div>
    </section>

    @if($flores->isEmpty())
        <div class="p-5 text-center rounded-4 bg-white border">
            <h2 class="h4 mb-2">Todavía no hay flores en el catálogo</h2>
            <p class="text-muted mb-4">Empieza agregando la primera flor con su nombre, color, temporada y foto.</p>
            <a href="{{ route('flores.create') }}" class="hero-btn">+ Agregar mi primera flor</a>
        </div>
    @else
        <div class="row g-4 pb-4">
            @foreach($flores as $flor)
                <div class="col-sm-6 col-lg-4">
                    <div class="flor-card h-100 d-flex flex-column">
                        @if(!empty($flor->imagen))
                            <div class="flor-img-wrap">
                                <img src="{{ asset('storage/' . $flor->imagen) }}" alt="{{ $flor->nombre }}" class="flor-card-img">
                            </div>
                        @endif

                        <div class="p-4 d-flex flex-column flex-grow-1 text-center">
                            <h2 class="flor-nombre h4 fw-bold mb-2">{{ $flor->nombre }}</h2>

                            <div class="d-flex flex-column align-items-center gap-2 mb-3">
                                @if(!empty($flor->color))
                                    <span class="badge flor-badge px-3 py-2">{{ $flor->color }}</span>
                                @endif
                                @if(!empty($flor->temporada))
                                    <span class="badge flor-badge px-3 py-2">{{ $flor->temporada }}</span>
                                @endif
                            </div>

                            <p class="text-muted small mb-4 flex-grow-1">
                                {{ $flor->descripcion ?: 'Sin descripción añadida.' }}
                            </p>

                            <div class="d-flex gap-2 pt-3 border-top justify-content-center align-items-center">
                                <a href="{{ route('flores.show', $flor) }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Ver</a>
                                <a href="{{ route('flores.edit', $flor) }}" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Editar</a>
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