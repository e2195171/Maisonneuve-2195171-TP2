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
        <?php $locale = session()->get('locale'); ?>
        <nav class="navbar navbar-light navbar-expand-lg d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <div class="container">          
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="<?php echo e(route('login')); ?>"><?php echo e(trans('lang.text_login')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="<?php echo e(route('registration')); ?>"><?php echo e(trans('lang.text_registration')); ?></a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="<?php echo e(route('forum')); ?>"><?php echo e(trans('lang.text_forum')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="<?php echo e(route('logout')); ?>"><?php echo e(trans('lang.text_logout')); ?></a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none <?php if($locale=='en'): ?>bg-secondary text-light <?php endif; ?>" href="<?php echo e(route('lang', 'en')); ?>"><img src="<?php echo e(asset('img/flag/en.png')); ?>" alt="English"> English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  me-3 py-2 text-dark text-decoration-none <?php if($locale=='fr'): ?> bg-secondary text-light <?php endif; ?>" href="<?php echo e(route('lang', 'fr')); ?>"><img src="<?php echo e(asset('img/flag/fr.png')); ?>" alt="Français"> Français</a>
                        </li>
                    </ul>
                </div>
            </div>
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
        <div class='border-bottom pb-3 mb-3'></div>
        <p class="text-center text-muted">© 2022 Maisonneuve 2195171, Inc</p>
    </div>
</footer>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</html><?php /**PATH C:\Users\Molson\Desktop\Maisonneuve-2195171 -local\resources\views/layouts/app.blade.php ENDPATH**/ ?>