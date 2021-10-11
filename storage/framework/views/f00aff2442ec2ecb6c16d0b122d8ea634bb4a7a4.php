

<?php $__env->startSection('container'); ?>
    <h1 class="mb-5">Post Category : <?php echo e($category); ?></h1>

    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                
                <th>Details</th>
            </tr>
        </thead>

        <tbody>
            <?php $no=1; ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?= $no ?></td>
                    <td>
                        <a href="/post/<?php echo e($dat->slug); ?>"><?php echo e($dat->title); ?></a>
                    </td>
                    
                    <td><?php echo e($dat->excerpt); ?></td>
                    <?php $no++ ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Application\latihanravael\resources\views/category.blade.php ENDPATH**/ ?>