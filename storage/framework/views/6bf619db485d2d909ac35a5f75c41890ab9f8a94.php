<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">GBPB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php echo e(($active == 'home') ? 'active' : ''); ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php echo e(($active == 'about') ? 'active' : ''); ?>" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php echo e(($active == 'blog') ? 'active' : ''); ?>" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php echo e(($active == 'categories') ? 'active' : ''); ?>" href="/categories">Categories</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <?php if(auth()->guard()->check()): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hi, <?php echo e(auth()->user()->name); ?>

            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  <?php echo csrf_field(); ?>
                  <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-right"></i> Logout</a></li>
                  </button>
                </form>
              </li>

            </ul>
          </li>
          <?php else: ?>
            <li class="nav-item">
              <a href="/login" class="nav-link  <?php echo e(($active == 'login') ? 'active' : ''); ?>"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav><?php /**PATH B:\Application\latihanravael\resources\views/components/header.blade.php ENDPATH**/ ?>