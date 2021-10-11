

<?php $__env->startSection('container'); ?>
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <a href="/blog?category=<?php echo e($dat->slug); ?>">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/300x300?<?php echo e($dat->name); ?>" class="card-img" alt="<?php echo e($dat->name); ?>">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)"><?php echo e($dat->name); ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Application\latihanravael\resources\views/categories.blade.php ENDPATH**/ ?>