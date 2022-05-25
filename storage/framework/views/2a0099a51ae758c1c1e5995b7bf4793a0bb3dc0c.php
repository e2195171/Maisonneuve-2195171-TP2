<?php $__env->startSection('content'); ?>
    
<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="height: 580px;">
            <a href="<?php echo e(route('forum')); ?>" class="btn btn-outline-dark btn-sm float-end"><?php echo e(trans('lang.text_back_button')); ?></a>
            <div class="mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4"><?php echo e(trans('lang.text_modify')); ?></h1>
                <p><?php echo e(trans('lang.text_modify_form')); ?></p>
                <hr>
                <form method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="title"><?php echo e(trans('lang.text_title_article')); ?></label>
                            <input type="text" id="title" class="form-control" name="title_en" value="<?php echo e($forum->title_en); ?>" required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="body"><?php echo e(trans('lang.text_body_article')); ?></label>
                            <textarea id="body" class="form-control" name="body_en" rows="" required><?php echo e($forum->body_en); ?></textarea>
                        </div>
                    </div>
                    <div class="control-group col-12 mt-2">
                        <label for="categorie"><?php echo e(trans('lang.text_category')); ?></label>
                        <select id="categorie" class="form-control" name="categories_id" required>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($categorie->id); ?>"<?php if($categorie->id == $forum->categories_id): ?> selected="selected" <?php endif; ?>><?php echo e($categorie->categorie); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="row mt-4">
                        <div class="control-group text-center">
                            <button class="btn btn-dark">
                            <?php echo e(trans('lang.text_btn_update')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171 -local\resources\views/forum/edit.blade.php ENDPATH**/ ?>