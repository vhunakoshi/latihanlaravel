<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo asset('css/bootstrap.css'); ?>" rel="stylesheet">

    <title><?php echo $__env->yieldContent('title'); ?></title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Ravael</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(url('/tentang')); ?>">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(url('/mahasiswa')); ?>">Data Mahasiswa</a>
                    </li>
                  </ul>
                </div>
            </div>
    </nav>

    <?php echo $__env->yieldContent('container'); ?>

    <script src="<?php echo asset('js/bootstrap.bundle.min.js'); ?>"></script>

  </body>
</html><?php /**PATH B:\Application\latihanravael\resources\views/layouts/main.blade.php ENDPATH**/ ?>