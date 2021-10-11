

<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3"><?php echo e($post->title); ?></h2>
            <p>By. <a href="/blog?author=<?php echo e($post->author->username); ?>" class="text-decoration-none"><?php echo e($post->author->name); ?></a> in <a href="/blog?category=<?php echo e($post->category->slug); ?>"  class="text-decoration-none"><?php echo e($post->category->name); ?></p></a>
            <img src="https://source.unsplash.com/1200x400?<?php echo e($post->category->name); ?>" class="img-fluid" alt="<?php echo e($post->category->name); ?>">
            <article class="my-3 fs-5">
                <?php echo $post->content; ?>

            </article>
            <a href="/blog" class="d-block mt-3 text-decoration-none">Back to Post</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Application\latihanravael\resources\views/contents.blade.php ENDPATH**/ ?>