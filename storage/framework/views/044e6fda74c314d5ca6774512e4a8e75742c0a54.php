
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <!-- alterate slide category name in from left and right -->
      <div class="row category hidden">
        <div class="col-lg-1"></div>
        <div class="col-lg-11">
          <?php if($category->id % 2 == 0): ?>
            <h1 class="animated fadeInRightBig text-left" style="font-weight: bold; color:#3399ff;"><?php echo e($category->categoryName); ?></h1>
          <?php else: ?>
            <h1 class="animated fadeInRightBig text-left" style="font-weight: bold; color:#3399ff;"><?php echo e($category->categoryName); ?></h1>
          <?php endif; ?>
        </div> 
      </div>
      <?php $__currentLoopData = $category->entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      <div class="row category hidden">
          <div class="col-lg-1"></div>
          <div class="col-lg-3">
            <h3 class="animated fadeInLeft text-left" style="color: white;"><?php echo e($entry->leftSide); ?><h3>
          </div>
          <div class="col-lg-7">
            <h3 class="animated fadeInRight text-left" style="color: white; font-style: italic;"><?php echo e($entry->rightSide); ?></h3>
            <hr class="animated fadeInRight" style="width: 100%">
          </div>
          <div class="col-lg-1"></div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

  <script>
    //loop categories and store them in the array for use
    var categories = [];
    $('.category').each(function(index, object) {
      categories.push(object);
    });
    //set start index
    var index = 0;
    //setInterval half a second and loop through categories and removeClass
    var interval = setInterval(function() { 
      $(categories[index]).removeClass('hidden');
      index++;
      if(index == categories.length){
        clearInterval(interval);
      }
    }, 750);
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>