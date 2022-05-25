
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2" style="min-height: 580px;">
            <a href="<?php echo e(route('student.create')); ?>" class="btn btn-dark float-end"><?php echo e(trans('lang.text_add_student')); ?></a>
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one"><?php echo e(trans('lang.text_list_student')); ?></h1>
                    </div>
                </div>
                <ol class="list-group list-group-numbered">
                    <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="list-group-item"><a href="<?php echo e(route('student.show', $student->id)); ?>" class="text-dark"><?php echo e(ucfirst($student->name)); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li class="list-group-item"><?php echo e(trans('lang.text_no_student')); ?></li>
                    <?php endif; ?>
                </ol>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171 -local - Copie\resources\views/student/index.blade.php ENDPATH**/ ?>