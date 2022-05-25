
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="." class="btn btn-outline-primary btn-sm">Retourner</a>
                <h4 class="display-one mt-4"><?php echo e(ucfirst($student->name)); ?></h4>
                <hr>
                <p class="display-one">Adresse : <?php echo e($student->address); ?></p>
                <p class="display-one">Téléphone : <?php echo e($student->phone); ?></p>
                <p class="display-one">Courriel : <?php echo e($student->email); ?></p>
                <p class="display-one">Date de naissance : <?php echo e($student->date_birthday); ?></p>
                <p class="display-one">Ville : <?php echo e($student->city_id); ?></p>    
                    <hr>
                    <a href="<?php echo e(route('student.edit', $student->id)); ?>" class="btn btn-outline-primary">Modifier l'étudiant(e)</a>
                    <hr>
                    <form method='post'>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger">Supprimer l'étudiant(e)</button>
                    </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Maisonneuve-2195171\resources\views//student/show.blade.php ENDPATH**/ ?>