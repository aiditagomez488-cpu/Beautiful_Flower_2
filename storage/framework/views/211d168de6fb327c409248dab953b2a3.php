<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8f3ef">
    <title><?php echo $__env->yieldContent('title', 'Beautiful Flower — Estudio floral'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root{--paper:#f8f5f1;--white:#fff;--ink:#302b2b;--muted:#8b8180;--rose:#b87583;--rose-dark:#925765;--rose-pale:#f3e5e5;--sage:#899482;--line:#eee7e2;--shadow:0 14px 38px rgba(66,48,43,.07)}
        *{box-sizing:border-box} body{margin:0;background:var(--paper);color:var(--ink);font-family:'DM Sans',sans-serif;min-height:100vh} h1,h2,h3,h4,.serif{font-family:'Playfair Display',serif}
        .app-topbar{height:76px;background:rgba(255,255,255,.92);border-bottom:1px solid var(--line);display:flex;align-items:center;position:sticky;top:0;z-index:1000;backdrop-filter:blur(14px)}
        .topbar-inner{max-width:1500px;width:100%;margin:auto;padding:0 34px;display:flex;align-items:center;justify-content:space-between;gap:20px}
        .brand{display:flex;align-items:center;gap:12px;text-decoration:none;color:var(--ink)}.brand-mark{width:39px;height:39px;border-radius:14px;background:#f1e1e2;display:grid;place-items:center;font-size:21px}.brand-name{font-family:'Playfair Display',serif;font-size:21px;font-weight:600;letter-spacing:-.4px}.brand-sub{display:block;color:var(--muted);font-size:10px;letter-spacing:2px;text-transform:uppercase;margin-top:-2px}
        .top-nav{display:flex;align-items:center;gap:8px}.top-nav a{padding:10px 15px;border-radius:30px;color:#766c6b;text-decoration:none;font-size:13px;font-weight:600;transition:.2s}.top-nav a:hover,.top-nav a.active{background:#f6eded;color:var(--rose-dark)}
        .top-action,.btn-pink-pill{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 18px;border:0;border-radius:30px;background:var(--rose);color:white;text-decoration:none;font-size:13px;font-weight:700;box-shadow:0 7px 18px rgba(184,117,131,.2);transition:.2s}.top-action:hover,.btn-pink-pill:hover{background:var(--rose-dark);color:#fff;transform:translateY(-1px)}
        .app-main{max-width:1500px;margin:0 auto;padding:34px 34px 64px}.alert-floral{background:#f2e7e5;border:1px solid #e6d3d1;color:#62484a;border-radius:14px;padding:13px 18px}
        .floral-panel{background:var(--white);border:1px solid var(--line);border-radius:22px;box-shadow:var(--shadow)}.btn-soft-outline{background:#fff;color:var(--ink);border:1px solid var(--line);border-radius:30px;font-weight:600}.btn-soft-outline:hover{background:var(--rose-pale);border-color:#e7cfd1;color:var(--rose-dark)}
        .form-control{border-color:#e9e1dc;padding:12px 14px}.form-control:focus{border-color:#c9959e;box-shadow:0 0 0 .2rem rgba(184,117,131,.12)}
        .app-footer{max-width:1500px;margin:0 auto;padding:0 34px 28px;color:#a49a96;font-size:11px;display:flex;justify-content:space-between;gap:12px}
        @media(max-width:767px){.app-topbar{height:66px}.topbar-inner{padding:0 17px}.brand-name{font-size:18px}.brand-sub{font-size:9px}.top-nav{display:none}.top-action{padding:9px 13px;font-size:12px}.app-main{padding:22px 16px 42px}.app-footer{padding:0 17px 22px;flex-direction:column}}
    </style>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <header class="app-topbar">
        <div class="topbar-inner">
            <a class="brand" href="<?php echo e(route('flores.index')); ?>">
                <span class="brand-mark">✿</span>
                <span><span class="brand-name">Beautiful Flower</span><span class="brand-sub">Estudio floral · Catálogo</span></span>
            </a>
            <nav class="top-nav" aria-label="Navegación principal">
                <a href="<?php echo e(route('flores.index')); ?>" class="<?php echo e(request()->routeIs('flores.index') ? 'active' : ''); ?>">Inicio</a>
                <a href="<?php echo e(route('flores.index')); ?>#catalogo">Colección</a>
            </nav>
            <a href="<?php echo e(route('flores.create')); ?>" class="top-action"><span aria-hidden="true">＋</span> Nueva flor</a>
        </div>
    </header>

    <main class="app-main">
        <?php if(session('success')): ?>
            <div class="alert alert-floral mb-4" role="status">✿ <?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="app-footer"><span>✿ Beautiful Flower</span><span>Un pequeño espacio para celebrar la belleza de las flores.</span></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\PUCA\Downloads\Beautiful_Flower_2_redisenado\resources\views/layouts/app.blade.php ENDPATH**/ ?>