<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 pt-4" style="min-height: 580px;">
            <span class="navbar-brand mr-auto"><?php echo e(trans('lang.text_welcome')); ?></span><a class="navbar-brand mr-auto" href="#"><?php echo e($name); ?></a><span class="navbar-brand mr-auto"><?php echo e(trans('lang.text_dashboard_login')); ?></span>
        </div>
    </div>    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171\resources\views/forum/dashboard.blade.php ENDPATH**/ ?>