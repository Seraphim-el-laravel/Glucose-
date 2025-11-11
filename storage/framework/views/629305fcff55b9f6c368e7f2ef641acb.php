<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <form method="POST" action="<?php echo e(route('logout')); ?>" style="display: inline;">
          <?php echo csrf_field(); ?>
          <button type="submit" class="nav-link" style="background: none; border: none; cursor: pointer;">
            <i class="fas fa-sign-out-alt"></i>
          </button>
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar --><?php /**PATH D:\A. 1Tugas Kulyah\Semester 3\Kecerdasan Buatan\Projek\diabetes\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>