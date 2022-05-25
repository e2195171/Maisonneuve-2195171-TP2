<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="height: 580px;">
            <a href="<?php echo e(route('directory.create')); ?>" class="btn btn-dark float-end"><?php echo e(trans('lang.text_file')); ?></a>
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one"><?php echo e(trans('lang.text_directory')); ?></h1>
                </div>
            </div>
            <ol class="list-group list-group-numbered">
                <?php $__empty_1 = true; $__currentLoopData = $directories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="list-group-item"><a href="<?php echo e(route('directory.show', $directory->id)); ?>" class="text-dark"><?php echo e(ucfirst($directory->name)); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="list-group-item"><?php echo e(trans('lang.text_no_file')); ?></li>
                <?php endif; ?>
            </ol>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171 -local - Copie\resources\views/directory/index.blade.php ENDPATH**/ ?>