
<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="row">
            <div class="col-12 pt-2">  
                <a href="<?php echo e(route('student')); ?>" class="btn btn-outline-dark btn-sm float-end">Retourner</a>             
                <div class="mt-5 pl-4 pr-4 pb-4">
                    <h1 class="display-4">Créer un(e) nouvel(le) étudiant(e)</h1>
                    <p>Remplissez et soumettez ce formulaire</p>
                    <hr>
                    <form method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Nom</label>
                                <input type="text" id="name" class="form-control" name="name"
                                placeholder="Entrer le nom d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="address">Adresse</label>
                                <input type="text" id="address" class="form-control" name="address"
                                placeholder="Entrer l'adresse d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="phone">Téléphone</label>
                                <input type="text" id="phone" class="form-control" name="phone"
                                placeholder="Entrer le téléphone d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="email">Courriel</label>
                                <input type="text" id="email" class="form-control" name="email"
                                placeholder="Entrer le courriel d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="date_birthday">Date de naissance</label>
                                <input type="text" id="date_birthday" class="form-control" name="date_birthday"
                                placeholder="Entrer la date de naissance d'étudiant(e)" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12">
                               <label for="city">Ville</label>
                               <select class="form-select" aria-label="Default select example" name="city" id="city">
                               <option>Sélectionnez la ville d'étudiant(e)</option>
                                <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($city->id); ?>"><?php echo e($city->city); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="control-group text-center">
                                <button class="btn btn-dark">
                                    Ajouter un(e) étudiant(e)
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Molson\Desktop\582-41B-MA-Cadriciel Web\Maisonneuve-2195171 -local\resources\views/student/create.blade.php ENDPATH**/ ?>