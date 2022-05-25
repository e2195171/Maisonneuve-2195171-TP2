<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-12 pt-2" style="min-height: 580px;">  
            <a href="<?php echo e(route('forum')); ?>" class="btn btn-outline-dark btn-sm float-end"><?php echo e(trans('lang.text_back_button')); ?></a>             
            <div class="mt-5 pl-4 pr-4 pb-4">
                <h1 class="display-4"><?php echo e(trans('lang.text_create')); ?></h1>
                <p><?php echo e(trans('lang.text_create_form')); ?></p>
                <hr>
                <form method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="btn btn-outline-dark btn-sm active" id="home-tab" data-bs-toggle="tab" data-bs-target="#english" type="button" role="tab" aria-controls="home" aria-selected="true"><?php echo e(trans('lang.text_lg_en')); ?></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn btn-outline-dark btn-sm" id="profile-tab" data-bs-toggle="tab" data-bs-target="#french" type="button" role="tab" aria-controls="profile" aria-selected="false"><?php echo e(trans('lang.text_lg_fr')); ?></button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="home-tab">
                                <div class="control-group col-12">
                                    <label for="title"><?php echo e(trans('lang.text_title_article')); ?></label>
                                    <input type="text" id="title" class="form-control" name="title_en" placeholder="<?php echo e(trans('lang.text_title_placeholder')); ?>" required></input>
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="body"><?php echo e(trans('lang.text_body_article')); ?></label>
                                    <textarea id="body" class="form-control" name="body_en" placeholder="<?php echo e(trans('lang.text_body_placeholder')); ?>" rows="" required></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="french" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="control-group col-12">
                                    <label for="title"><?php echo e(trans('lang.text_title_article')); ?></label>
                                    <input type="text" id="title" class="form-control" name="title_fr" placeholder="<?php echo e(trans('lang.text_title_placeholder')); ?>" required></input>
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="body"><?php echo e(trans('lang.text_body_article')); ?></label>
                                    <textarea id="body" class="form-control" name="body_fr" placeholder="<?php echo e(trans('lang.text_body_placeholder')); ?>" rows="" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="categorie"><?php echo e(trans('lang.text_category')); ?></label>
                            <select id="categorie" class="form-control" name="categories_id" required>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->categorie); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="row mt-4">
                            <div class="control-group text-center">
                                <button class="btn btn-dark">
                                <?php echo e(trans('lang.text_btn_create')); ?>

                                </button>
                            </div>
                        </div>
                    </div>   
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171 -local - Copie\resources\views/forum/create.blade.php ENDPATH**/ ?>