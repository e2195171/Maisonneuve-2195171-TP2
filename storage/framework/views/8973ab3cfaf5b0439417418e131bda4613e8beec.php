<?php $__env->startSection('content'); ?>
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 pt-4" style="height: 580px;">
                    <div class="card">
                        <h3 class="card-header text-center"><?php echo e(trans('lang.text_login')); ?></h3>
                        <div class="card-body">
                        <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                 <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> 
                        <?php endif; ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                <?php echo e($error); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>                         
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <form action="<?php echo e(route('custom.login')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="<?php echo app('translator')->get('lang.text_name'); ?>" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="<?php echo app('translator')->get('lang.text_password'); ?>" class="form-control" name="password">
                                </div>
                                <div class="d-grid mx-auto">
                                    <button class="btn btn-dark btn-block"><?php echo app('translator')->get('lang.text_connection'); ?></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171\resources\views/auth/login.blade.php ENDPATH**/ ?>