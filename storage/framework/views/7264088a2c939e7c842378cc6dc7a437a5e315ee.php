

<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Fotoblog Overview</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="<?php echo e(Request::url()); ?>">Overview</a></li>
          <li><a href="/Amber/dashboard/fotoblog-create">Create</a></li>
          <li><a href="/Amber/dashboard/fotoblog-edit">Edit</a></li>
          <li><a href="/Amber/dashboard/fotoblog-delete">Delete</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <?php $__currentLoopData = $fotoblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fotoblog): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <h1><?php echo e($fotoblog->title); ?></h1>
      <h2><?php echo e($fotoblog->description); ?></h2>
      <img src="/uploads/<?php echo e($fotoblog->image); ?>" alt="<?php echo e($fotoblog->title); ?>">
      <h2><?php echo e(date('F d, Y', strtotime($fotoblog->created_at))); ?></h2>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>