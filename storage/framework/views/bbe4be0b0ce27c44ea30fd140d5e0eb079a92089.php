<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <style>
        body{
            font-family: 'Comfortaa'
        }
    </style>
</head>
<header>
    <div class='container py-3'>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Maisonneuve 2195171</span>
        </a>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="/student">Étudiants</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="<?php echo e(route('student.create')); ?>">Ajouter un(e) étudiant(e)</a>
        </nav>
    </div>
</header>
<body>
    <div class='container py-3'>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
<footer class="py-3 my-4">
    <div class='container py-3'>
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/student" class="nav-link px-2 text-muted">Étudiants</a></li>
            <li class="nav-item"><a href="<?php echo e(route('student.create')); ?>" class="nav-link px-2 text-muted">Ajouter un(e) étudiant(e)</a></li>
        </ul>
        <p class="text-center text-muted">© 2021 Maisonneuve 2195171, Inc</p>
    </div>
</footer>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</html><?php /**PATH C:\xampp\htdocs\Maisonneuve-2195171\resources\views/layouts/app.blade.php ENDPATH**/ ?>