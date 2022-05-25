
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2" style="height: 580px;">
                <a href="." class="btn btn-outline-dark btn-sm float-end">Retourner</a>
                <h4 class="display-one mt-4"><?php echo e(ucfirst($student->name)); ?></h4>
                <hr>
                <p class="display-one">Adresse : <?php echo e($student->address); ?></p>
                <p class="display-one">Téléphone : <?php echo e($student->phone); ?></p>
                <p class="display-one">Courriel : <?php echo e($student->email); ?></p>
                <p class="display-one">Date de naissance : <?php echo e($student->date_birthday); ?></p>
                <p class="display-one">Ville : <?php echo e($city->city); ?></p> 
                    <hr>
                    <a href="<?php echo e(route('student.edit', $student->id)); ?>" class="btn btn-dark">Modifier l'étudiant(e)</a>
                    <hr>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa fa-trash">Supprimer l'étudiant(e)</i>
                    </button>
                    <hr>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-danger">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Vous êtes certains de supprimer cet étudiant(e)?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Annuler</button>
                    <form method='post'>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger"><i class="fa fa-trash">Supprimer</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\582-41B-MA-Cadriciel Web\Maisonneuve-2195171 -local\resources\views/student/show.blade.php ENDPATH**/ ?>