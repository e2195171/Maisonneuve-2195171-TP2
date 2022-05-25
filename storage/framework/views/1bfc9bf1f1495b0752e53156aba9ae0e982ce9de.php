<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="min-height: 580px;">
            <a href="<?php echo e(route('directory')); ?>" class="btn btn-outline-dark btn-sm float-end"><?php echo e(trans('lang.text_back_button')); ?></a>             
            <div class="mt-5 pl-4 pr-4 pb-4">
                <h1 class="display-6"><?php echo e(trans('lang.text_file')); ?></h1>
                <p><?php echo e(trans('lang.text_add_file')); ?></p>
                <hr>
                <form method="POST" action="" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="control-group col-12 pb-4">
                            <label for="name"><?php echo e(trans('lang.text_directory_name')); ?></label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="<?php echo e(trans('lang.text_directoty_placeholder')); ?>" required></input>
                        </div>
                        <div class="control-group col-12">
                            <input name="document" type="file" required></input>
                        </div>
                    </div>
                    <hr> 
                    <div class="row mt-4">
                        <div class="control-group text-center">
                            <button class="btn btn-dark">
                            <?php echo e(trans('lang.text_file')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171 -local - Copie\resources\views/directory/create.blade.php ENDPATH**/ ?>