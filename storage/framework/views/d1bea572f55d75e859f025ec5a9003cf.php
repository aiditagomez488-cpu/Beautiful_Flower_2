<?php $__env->startSection('title', 'Beautiful Flower — Tu espacio floral'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .welcome-line{display:flex;align-items:center;gap:9px;color:var(--rose-dark);font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:12px}.welcome-line:before{content:'';width:27px;height:1px;background:var(--rose)}
    .hero-app{position:relative;min-height:330px;border-radius:25px;overflow:hidden;background:#ded1c9 url('<?php echo e(asset('images/banner-catalogo.jpg')); ?>') center 48%/cover no-repeat;display:flex;align-items:center;padding:48px 6%;box-shadow:var(--shadow);margin-bottom:28px}
    .hero-app:before{content:'';position:absolute;inset:0;background:linear-gradient(90deg,rgba(35,28,28,.69),rgba(35,28,28,.36) 55%,rgba(35,28,28,.04))}
    .hero-copy{position:relative;z-index:1;max-width:560px;color:#fff}.hero-copy .eyebrow{font-size:11px;letter-spacing:2.5px;text-transform:uppercase;color:#f4dfe1;font-weight:700}.hero-copy h1{font-size:clamp(36px,5vw,57px);line-height:1.06;margin:13px 0 14px;font-weight:600}.hero-copy p{font-size:14px;line-height:1.8;color:rgba(255,255,255,.88);max-width:430px;margin-bottom:23px}.hero-cta{display:inline-flex;align-items:center;gap:9px;background:#fff;color:#594247;border-radius:30px;padding:12px 19px;text-decoration:none;font-size:12px;font-weight:700;transition:.2s}.hero-cta:hover{background:#f4e5e6;color:#594247;transform:translateY(-2px)}
    .stats-row{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:34px}.stat-card{background:#fff;border:1px solid var(--line);border-radius:17px;padding:17px 20px;display:flex;align-items:center;gap:14px}.stat-icon{width:43px;height:43px;border-radius:14px;background:#f6ebeb;display:grid;place-items:center;color:var(--rose-dark);font-size:20px}.stat-label{font-size:11px;color:var(--muted);margin-bottom:3px}.stat-value{font-family:'Playfair Display',serif;font-size:23px;font-weight:600;line-height:1.1}
    .section-head{display:flex;justify-content:space-between;align-items:end;gap:20px;margin-bottom:18px}.section-kicker{font-size:10px;letter-spacing:2px;text-transform:uppercase;color:var(--rose-dark);font-weight:700}.section-title{font-size:30px;margin:5px 0 0}.section-note{color:var(--muted);font-size:12px;margin:5px 0 0}
    .catalog-tools{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:20px}.filter-pills{display:flex;flex-wrap:wrap;gap:7px}.filter-pill{border:1px solid #e9dfda;background:#fff;color:#756b68;border-radius:25px;padding:8px 14px;font-size:11px;font-weight:700;cursor:pointer;transition:.2s}.filter-pill:hover,.filter-pill.active{background:#5b4548;border-color:#5b4548;color:#fff}.search-wrap{position:relative;width:min(100%,270px)}.search-wrap span{position:absolute;left:13px;top:50%;transform:translateY(-50%);color:#a79b96}.search-input{width:100%;border:1px solid #e9dfda;border-radius:25px;padding:10px 14px 10px 36px;background:#fff;font-size:12px;outline:none}.search-input:focus{border-color:#c9959e;box-shadow:0 0 0 3px rgba(184,117,131,.1)}
    .flower-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:19px}.flower-card{background:#fff;border:1px solid var(--line);border-radius:19px;overflow:hidden;transition:transform .25s,box-shadow .25s;min-width:0}.flower-card:hover{transform:translateY(-5px);box-shadow:0 17px 35px rgba(66,48,43,.1)}.flower-photo{height:220px;position:relative;overflow:hidden;background:#f0e8e5}.flower-photo img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .5s}.flower-card:hover .flower-photo img{transform:scale(1.045)}.photo-label{position:absolute;top:13px;left:13px;background:rgba(255,255,255,.91);backdrop-filter:blur(8px);border-radius:20px;padding:6px 10px;color:#6f5157;font-size:9px;font-weight:700;letter-spacing:.6px;text-transform:uppercase}.flower-info{padding:17px 18px 16px}.flower-meta{display:flex;align-items:center;gap:7px;flex-wrap:wrap;margin-bottom:9px}.flower-tag{font-size:9px;letter-spacing:.4px;text-transform:uppercase;background:#f7eeee;color:#91616a;padding:5px 9px;border-radius:20px}.flower-name{font-size:21px;line-height:1.2;margin:0 0 8px;font-weight:600}.flower-description{color:var(--muted);font-size:11px;line-height:1.65;min-height:37px;margin:0 0 14px}.flower-actions{display:flex;align-items:center;gap:7px;border-top:1px solid #f1ece8;padding-top:12px}.flower-action{display:inline-flex;align-items:center;justify-content:center;text-decoration:none;border:1px solid #e9e1dc;background:#fff;color:#695d5a;border-radius:20px;padding:7px 12px;font-size:10px;font-weight:700}.flower-action:hover{background:#f6eded;color:#875560}.flower-delete{margin-left:auto}.flower-delete button{border:0;background:transparent;color:#a77b7b;font-size:10px;font-weight:700;padding:7px}.flower-delete button:hover{color:#9b424b}
    .empty-state{background:#fff;border:1px dashed #ddc9c7;border-radius:22px;padding:55px 20px;text-align:center}.empty-flower{font-size:42px;color:#c18b94;margin-bottom:10px}.empty-state h3{font-size:25px}.empty-state p{color:var(--muted);font-size:13px}.empty-state a{margin-top:8px}
    .no-results{display:none;text-align:center;padding:35px;color:var(--muted);font-size:13px;grid-column:1/-1}
    @media(max-width:991px){.flower-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.hero-app{min-height:300px}.flower-photo{height:205px}}
    @media(max-width:650px){.hero-app{min-height:340px;padding:32px 25px;background-position:58% center}.hero-app:before{background:linear-gradient(90deg,rgba(35,28,28,.75),rgba(35,28,28,.43))}.hero-copy h1{font-size:39px}.stats-row{gap:8px}.stat-card{padding:12px 10px;gap:8px;align-items:flex-start;flex-direction:column}.stat-icon{width:34px;height:34px;font-size:16px;border-radius:11px}.stat-value{font-size:20px}.stat-label{font-size:9px}.section-head{align-items:flex-start}.section-title{font-size:26px}.catalog-tools{align-items:stretch;flex-direction:column}.search-wrap{width:100%}.flower-grid{grid-template-columns:1fr;gap:14px}.flower-card{display:grid;grid-template-columns:38% 1fr}.flower-photo{height:100%;min-height:210px}.flower-info{padding:14px 13px}.flower-name{font-size:18px}.flower-description{font-size:10px;min-height:0}.flower-actions{gap:5px;flex-wrap:wrap}.flower-action{padding:6px 9px;font-size:9px}.flower-delete{margin-left:0}.flower-delete button{padding:6px 3px}}
    @media(max-width:390px){.flower-card{grid-template-columns:1fr}.flower-photo{height:190px;min-height:0}.stats-row{grid-template-columns:repeat(3,1fr)}.stat-card{min-height:106px}}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="hero-app">
        <div class="hero-copy">
            <div class="eyebrow">Un detalle que florece</div>
            <h1>La belleza está<br><em>en cada pétalo.</em></h1>
            <p>Explora nuestra colección, descubre colores y temporadas, y crea un espacio para cada flor que te inspira.</p>
            <a href="#catalogo" class="hero-cta">Explorar colección <span aria-hidden="true">↗</span></a>
        </div>
    </section>

    <section class="stats-row" aria-label="Resumen del catálogo">
        <div class="stat-card"><span class="stat-icon">✿</span><div><div class="stat-label">Flores registradas</div><div class="stat-value"><?php echo e($flores->count()); ?></div></div></div>
        <div class="stat-card"><span class="stat-icon">❀</span><div><div class="stat-label">Colores diferentes</div><div class="stat-value"><?php echo e($flores->pluck('color')->filter()->unique()->count()); ?></div></div></div>
        <div class="stat-card"><span class="stat-icon">☼</span><div><div class="stat-label">Temporadas</div><div class="stat-value"><?php echo e($flores->pluck('temporada')->filter()->unique()->count()); ?></div></div></div>
    </section>

    <section id="catalogo">
        <div class="section-head">
            <div><div class="section-kicker">Tu colección personal</div><h2 class="section-title">Descubre las flores</h2><p class="section-note">Cada flor tiene una historia y una belleza única.</p></div>
            <span class="section-note"><?php echo e($flores->count()); ?> <?php echo e($flores->count() === 1 ? 'registro' : 'registros'); ?></span>
        </div>

        <?php if($flores->isEmpty()): ?>
            <div class="empty-state"><div class="empty-flower">✿</div><h3>Tu colección comienza aquí</h3><p>Aún no hay flores registradas. Añade la primera y empieza a construir tu catálogo.</p><a href="<?php echo e(route('flores.create')); ?>" class="btn-pink-pill">＋ Agregar primera flor</a></div>
        <?php else: ?>
            <div class="catalog-tools">
                <div class="filter-pills" role="group" aria-label="Filtrar catálogo">
                    <button class="filter-pill active" type="button" data-filter="all">Todas</button>
                    <?php $__currentLoopData = $flores->pluck('color')->filter()->unique()->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button class="filter-pill" type="button" data-filter="<?php echo e(strtolower($color)); ?>"><?php echo e($color); ?></button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <label class="search-wrap"><span aria-hidden="true">⌕</span><input class="search-input" id="flowerSearch" type="search" placeholder="Buscar una flor..." aria-label="Buscar flores"></label>
            </div>

            <div class="flower-grid" id="flowerGrid">
                <?php $__currentLoopData = $flores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="flower-card" data-name="<?php echo e(strtolower($flor->nombre)); ?>" data-color="<?php echo e(strtolower($flor->color)); ?>" data-season="<?php echo e(strtolower($flor->temporada)); ?>">
                        <div class="flower-photo">
                            <img src="<?php echo e($flor->imagen_url); ?>" alt="<?php echo e($flor->nombre); ?>" loading="lazy" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=900&q=80';">
                            <span class="photo-label">Colección floral</span>
                        </div>
                        <div class="flower-info">
                            <div class="flower-meta"><span class="flower-tag"><?php echo e($flor->color); ?></span><span class="flower-tag"><?php echo e($flor->temporada); ?></span></div>
                            <h3 class="flower-name"><?php echo e($flor->nombre); ?></h3>
                            <p class="flower-description"><?php echo e($flor->descripcion ?: 'Una flor especial para añadir belleza a cualquier espacio.'); ?></p>
                            <div class="flower-actions">
                                <a href="<?php echo e(route('flores.show', $flor)); ?>" class="flower-action">Ver detalle ↗</a>
                                <a href="<?php echo e(route('flores.edit', $flor)); ?>" class="flower-action">Editar</a>
                                <form action="<?php echo e(route('flores.destroy', $flor)); ?>" method="POST" class="flower-delete" onsubmit="return confirm('¿Deseas eliminar esta flor del catálogo?')">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="no-results" id="noResults">No encontramos flores con esa búsqueda. Prueba con otro nombre o color.</div>
            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
(() => {
    const search = document.getElementById('flowerSearch');
    const cards = [...document.querySelectorAll('.flower-card')];
    const filters = [...document.querySelectorAll('.filter-pill')];
    const empty = document.getElementById('noResults');
    if (!cards.length) return;
    let activeFilter = 'all';
    const applyFilters = () => {
        const term = (search?.value || '').trim().toLocaleLowerCase('es');
        let visible = 0;
        cards.forEach(card => {
            const matchesText = `${card.dataset.name} ${card.dataset.color} ${card.dataset.season}`.includes(term);
            const matchesFilter = activeFilter === 'all' || card.dataset.color === activeFilter;
            const show = matchesText && matchesFilter;
            card.hidden = !show;
            if (show) visible++;
        });
        if (empty) empty.style.display = visible ? 'none' : 'block';
    };
    search?.addEventListener('input', applyFilters);
    filters.forEach(button => button.addEventListener('click', () => {
        activeFilter = button.dataset.filter;
        filters.forEach(item => item.classList.toggle('active', item === button));
        applyFilters();
    }));
})();
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PUCA\Downloads\Beautiful_Flower_2_redisenado\resources\views/flores/index.blade.php ENDPATH**/ ?>