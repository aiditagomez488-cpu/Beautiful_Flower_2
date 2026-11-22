<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Flower — Catálogo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --bg-page: #fbf4f4;
            --bg-card: #ffffff;
            --bg-soft: #f7e9eb;
            --hero-dark: #26181c;
            --hero-mid: #3a232a;
            --pink-accent: #f4b8c8;
            --pink-deep: #d9829b;
            --text-main: #2d1e22;
            --text-muted: #755d64;
            --border-soft: rgba(217, 130, 155, 0.22);
        }

        body {
            background-color: var(--bg-page);
            color: var(--text-main);
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
        }

        h1, h2, h3, .font-serif-floral {
            font-family: 'Cormorant Garamond', serif;
        }

        .navbar-floral {
            background: linear-gradient(135deg, var(--hero-dark) 0%, var(--hero-mid) 100%);
            border-bottom: 1px solid rgba(244, 184, 200, 0.35);
            box-shadow: 0 8px 28px rgba(217, 130, 155, 0.16);
            padding-top: 0.9rem;
            padding-bottom: 0.9rem;
        }

        .navbar-floral .navbar-brand {
            color: #fff5f7;
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .btn-pink-pill {
            background-color: var(--pink-accent);
            color: var(--hero-dark);
            border: none;
            border-radius: 999px;
            font-weight: 600;
            padding: 0.5rem 1.2rem;
            box-shadow: 0 0 18px rgba(244, 184, 200, 0.45);
            transition: all 0.2s ease;
        }

        .btn-pink-pill:hover {
            background-color: #f9cbd7;
            color: var(--hero-dark);
            transform: translateY(-1px);
        }

        .btn-soft-outline {
            background-color: var(--bg-soft);
            color: var(--text-main);
            border: 1px solid var(--border-soft);
            border-radius: 999px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-soft-outline:hover {
            background-color: var(--pink-accent);
            color: var(--hero-dark);
        }

        .floral-panel {
            background: var(--bg-card);
            border: 1px solid var(--border-soft);
            border-radius: 24px;
            box-shadow: 0 12px 32px rgba(58, 35, 42, 0.06);
        }

        .alert-floral {
            background-color: #fff0f4;
            border: 1px solid var(--pink-accent);
            color: var(--hero-dark);
            border-radius: 16px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-floral">
        <div class="container">
            <a class="navbar-brand" href="{{ route('flores.index') }}">₊⊹ Beautiful Flower 𓂃✍︎</a>
            <a href="{{ route('flores.create') }}" class="btn btn-pink-pill">+ Agregar flor</a>
        </div>
    </nav>

    <div class="container py-4 py-md-5">
        @if(session('success'))
            <div class="alert alert-floral mb-4">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>