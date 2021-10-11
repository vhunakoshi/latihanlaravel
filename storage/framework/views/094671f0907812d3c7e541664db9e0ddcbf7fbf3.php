

<?php $__env->startSection('container'); ?>
    <h1 class="mb-3 text-center"><?php echo e($title); ?></h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                <?php if(request('category')): ?>
                    <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">
                <?php endif; ?>
                <?php if(request('author')): ?>
                    <input type="hidden" name="author" value="<?php echo e(request('author')); ?>">
                <?php endif; ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="<?php echo e(request('search')); ?>">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>


    <?php if($post->count()): ?>
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?<?php echo e($post[0]->category->name); ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h3 class="card-title">
                <a href="/post/<?php echo e($post[0]->slug); ?>" class="text-decoration-none text-dark"><?php echo e($post[0]->title); ?></a>
            </h3>
            <p>
                <small class="text-muted">
                    By. <a href="/blog?author=<?php echo e($post[0]->author->username); ?>" class="text-decoration-none"><?php echo e($post[0]->author->name); ?></a> in <a href="/blog?category=<?php echo e($post[0]->category->slug); ?>" class="text-decoration-none"><?php echo e($post[0]->category->name); ?></a> <?php echo e($post[0]->created_at->diffForHumans()); ?>

                </small>
            </p>
            <p class="card-text"><?php echo e($post[0]->excerpt); ?></p>
            <a href="/post/<?php echo e($post[0]->slug); ?>" class="text-decoration-none btn btn-primary btn-sm">Read more..</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $post->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="/blog?category=<?php echo e($dat->category->slug); ?>" class="text-white text-decoration-none"><?php echo e($dat->category->name); ?></a></div>
                        <img src="https://source.unsplash.com/300x300?<?php echo e($dat->category->name); ?>" class="card-img-top" alt="<?php echo e($dat->category->name); ?>">
                        <div class="card-body">
                        <h3 class="card-title"<a href="/post/<?php echo e($dat->slug); ?>" class="text-decoration-none"><?php echo e($dat->title); ?></a></h3>
                        <p>By. <a href="/blog?author=<?php echo e($dat->author->username); ?>" class="text-decoration-none"><?php echo e($dat->author->name); ?></a>
                        <p class="card-text"><?php echo e($dat->excerpt); ?></p>
                        <a href="/post/<?php echo e($dat->slug); ?>" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php else: ?>
        <p class="text-center fs-4">No post found.</p>
    <?php endif; ?>

    <div class="d-flex justify-content-end">
        <?php echo e($post->links()); ?>

    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Application\latihanravael\resources\views/posts.blade.php ENDPATH**/ ?>