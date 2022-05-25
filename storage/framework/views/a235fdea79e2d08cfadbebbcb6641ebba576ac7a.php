<?php $__env->startSection('content'); ?>

<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 pt-4" style="height: 580px;">
                <div class="card">
                    <h3 class="card-header text-center"><?php echo app('translator')->get('lang.text_register_user'); ?></h3>
                    <div class="card-body">
                        <form action="<?php echo e(route('custom.registration')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="<?php echo app('translator')->get('lang.text_name'); ?>" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required>
                                <?php if($errors->has('name')): ?>
                                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                    <?php echo e($errors->first('name')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" placeholder="<?php echo app('translator')->get('lang.text_email'); ?>" class="form-control" name="email" value="<?php echo e(old('email')); ?>"  required>
                                <?php if($errors->has('email')): ?>
                                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                    <?php echo e($errors->first('email')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                 <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="<?php echo app('translator')->get('lang.text_password'); ?>" class="form-control" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                                    <?php echo e($errors->first('password')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="d-grid mx-auto">
                                <button class="btn btn-dark btn-block"><?php echo app('translator')->get('lang.text_sign_up'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171 -local - Copie\resources\views/auth/registration.blade.php ENDPATH**/ ?>