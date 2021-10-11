

<?php $__env->startSection('container'); ?>
    <h1>Hello, <?php echo e($name); ?></h1>
    <p><?php echo e($email); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Application\latihanravael\resources\views/index.blade.php ENDPATH**/ ?>