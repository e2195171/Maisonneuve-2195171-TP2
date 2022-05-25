<?php $__env->startSection('content'); ?>
    
<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="height: 580px;">  
            <a href="<?php echo e(route('directory')); ?>" class="btn btn-outline-dark btn-sm float-end"><?php echo e(trans('lang.text_back_button')); ?></a>
            <h1 class="display-one mt-4"><?php echo e(ucfirst($directory->name)); ?></h1>
            <hr>
            <a href="<?php echo e(route('forum.pdf', $directory->id)); ?>" class="btn btn-outline-dark btn-sm" target="_blank"><?php echo e(trans('lang.text_download')); ?></a> 
            <hr>
            <strong><?php echo e(trans('lang.text_author')); ?> : </strong> <?php echo e($directory->forumHasUser->name); ?>

            <hr>
            <strong><?php echo e(trans('lang.text_date')); ?> : </strong> <?php echo e($directory->created_at); ?>

            <hr>
            <a href="<?php echo e(route('directory.edit', $directory->id)); ?>" class="btn btn-dark"><?php echo e(trans('lang.text_btn_edit_file')); ?></a>
            <hr>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="fa fa-trash"><?php echo e(trans('lang.text_but_del_file')); ?></i>
            </button>
            <hr>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-danger">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(trans('lang.text_btn_delete')); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?php echo e(trans('lang.text_delete_file')); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal"><?php echo e(trans('lang.text_btn_cancel')); ?></button>
                <form method='post'>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger"><i class="fa fa-trash"><?php echo e(trans('lang.text_btn_delete')); ?></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171 -local - Copie\resources\views/directory/show.blade.php ENDPATH**/ ?>