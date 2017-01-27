
<?php $__env->startSection('content'); ?>
  <?php $__currentLoopData = $performances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $performance): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <h1><?php echo e($performance->name); ?></h1>
      <h1><?php echo e($performance->description); ?></h1>
      <h2><?php echo e($performance->performanceDate); ?></h2>
      <img src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>">
      <h2><?php echo e(date('F d, Y', strtotime($performance->created_at))); ?></h2>
      <hr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>