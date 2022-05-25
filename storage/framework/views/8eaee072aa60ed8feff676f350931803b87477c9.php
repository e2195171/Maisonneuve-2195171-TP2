
<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="row">
            <div class="col-12 pt-2" style="min-height: 580px;">  
                <a href="<?php echo e(route('student')); ?>" class="btn btn-outline-dark btn-sm float-end"><?php echo e(trans('lang.text_back_button')); ?></a>             
                <div class="mt-5 pl-4 pr-4 pb-4">
                    <h1 class="display-4"><?php echo e(trans('lang.text_add_student')); ?></h1>
                    <p><?php echo e(trans('lang.text_student_form')); ?></p>
                    <hr>
                    <form method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name"><?php echo e(trans('lang.text_name')); ?></label>
                                <input type="text" id="name" class="form-control" name="name"
                                placeholder="<?php echo e(trans('lang.text_name_placeholder')); ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="address"><?php echo e(trans('lang.text_address')); ?></label>
                                <input type="text" id="address" class="form-control" name="address"
                                placeholder="<?php echo e(trans('lang.text_address_placeholder')); ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="phone"><?php echo e(trans('lang.text_phone')); ?></label>
                                <input type="text" id="phone" class="form-control" name="phone"
                                placeholder="<?php echo e(trans('lang.text_phone_placeholder')); ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="email"><?php echo e(trans('lang.text_email')); ?></label>
                                <input type="text" id="email" class="form-control" name="email"
                                placeholder="<?php echo e(trans('lang.text_email_placeholder')); ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="date_birthday"><?php echo e(trans('lang.text_birthday')); ?></label>
                                <input type="text" id="date_birthday" class="form-control" name="date_birthday"
                                placeholder="<?php echo e(trans('lang.text_birthday_placeholder')); ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                               <label for="city"><?php echo e(trans('lang.text_city')); ?></label>
                               <select class="form-select" aria-label="Default select example" name="city" id="city">
                               <option><?php echo e(trans('lang.text_sities')); ?></option>
                                <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($city->id); ?>"><?php echo e($city->city); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="control-group text-center">
                                <button class="btn btn-dark">
                                <?php echo e(trans('lang.text_btn_student')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171 -local - Copie\resources\views/student/create.blade.php ENDPATH**/ ?>