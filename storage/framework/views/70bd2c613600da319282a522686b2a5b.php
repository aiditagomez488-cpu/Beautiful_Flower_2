<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="floral-panel p-4 p-md-5">
                <h1 class="display-6 fw-bold mb-4">Editar flor</h1>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger rounded-4">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('flores.update', $flor)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="mb-3">
                        <label class="form-label fw-medium">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo e(old('nombre', $flor->nombre)); ?>" class="form-control rounded-3" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-medium">Color</label>
                            <input type="text" name="color" value="<?php echo e(old('color', $flor->color)); ?>" class="form-control rounded-3" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-medium">Temporada</label>
                            <input type="text" name="temporada" value="<?php echo e(old('temporada', $flor->temporada)); ?>" class="form-control rounded-3" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-medium">Fotografía actual</label>
                        <div class="mb-2">
                            <img src="<?php echo e($flor->imagen_url); ?>" alt="<?php echo e($flor->nombre); ?>" class="rounded-4 border" style="max-height: 170px; object-fit: cover;">
                        </div>
                        <input type="file" name="imagen" accept="image/*" class="form-control rounded-3">
                        <div class="form-text">Sube otra imagen solo si deseas reemplazar la actual.</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-medium">Descripción</label>
                        <textarea name="descripcion" rows="3" class="form-control rounded-3"><?php echo e(old('descripcion', $flor->descripcion)); ?></textarea>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-pink-pill">Actualizar</button>
                        <a href="<?php echo e(route('flores.index')); ?>" class="btn btn-soft-outline px-4">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PUCA\Desktop\Beautiful_Flower_2_Copia\resources\views/flores/edit.blade.php ENDPATH**/ ?>