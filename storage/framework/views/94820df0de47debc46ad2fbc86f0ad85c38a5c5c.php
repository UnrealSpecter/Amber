

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
        <a class="navbar-brand" href="#">Performance Overview</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="<?php echo e(Request::url()); ?>">Overview</a></li>
          <li><a href="/Amber/performances/create">Create</a></li>
          <li><a href="/Amber/performances/edit">Edit</a></li>
          <li><a href="/Amber/performances/delete">Delete</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <?php $__currentLoopData = $performances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $performance): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <h1><?php echo e($performance->name); ?></h1>
      <h1><?php echo e($performance->description); ?></h1>
      <h2><?php echo e($performance->performanceDate); ?></h2>
      <img src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>">
      <h2><?php echo e(date('F d, Y', strtotime($performance->created_at))); ?></h2>
      <a href="<?php echo e(Request::url()); ?>/<?php echo e($performance->id); ?>/edit" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-pencil"></span> Edit
      </a>
      <form method="POST" action="<?php echo e(URL::to('/Amber/performances')); ?>/<?php echo e($performance->id); ?>" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
          <button type="submit" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-remove"></span> Delete
          </button>
      </form>
      <hr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>