
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <!-- alterate slide category name in from left and right -->
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-1">
        <?php if($category->id % 2 == 0): ?>
        <h1 class="animated fadeInLeft" style="font-weight: bold; color: #3399ff;"><?php echo e($category->categoryName); ?></h1>
        <?php else: ?>
        <h1 class="animated fadeInLeft" style="font-weight: bold; color:#3399ff;"><?php echo e($category->categoryName); ?></h1>
        <?php endif; ?>
      </div> 
      <div class="col-lg-7"></div>
    </div>

    <?php $__currentLoopData = $category->entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
          <h3 class="animated fadeInLeft" style="color: white;"><?php echo e($entry->leftSide); ?><h3>
          <!-- <hr class="animated fadeInLeft" style="float: left; width: 20%"> -->
        </div>
        <div class="col-lg-8">
          <h3 class="animated fadeInRight" style="color: white; font-style: italic;"><?php echo e($entry->rightSide); ?></h3>
          <hr class="animated fadeInRight" style="width: 100%">
        </div>
    </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>