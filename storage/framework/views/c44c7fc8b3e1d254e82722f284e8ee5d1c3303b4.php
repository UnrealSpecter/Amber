
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__currentLoopData = $performances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $performance): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
  <div class="row performance">
  	<div class="col-lg-4">
  	</div>
  	<div class="col-lg-4 text-center">
		<h1 class='text-center' style="color: white;"><?php echo e($performance->name); ?></h1>
		<!-- <h1 style="color: lightgrey;"><?php echo e($performance->description); ?></h1> -->
		<h1 style="font-size: 5em; color: white;"><?php echo e(date('d F', strtotime($performance->performanceDate))); ?></h2>
		<hr style='width: 100%;'>
		<img class="center-block img-responsive" src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>">
		<hr style='width: 100%;'>
  	</div>
  	<div class="col-lg-4"></div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<!-- 	<script>
		//loop categories and store them in the array for use
		var performances = [];
		$('.performance').each(function(index, object) {
		  performances.push(object);
		});
		//set start index
		var index = 0;
		//setInterval half a second and loop through categories and removeClass
		var interval = setInterval(function() { 
		  $(performances[index]).removeClass('hidden');
		  index++;
		  if(index == performances.length){
		    clearInterval(interval);
		  }
		}, 750);
	</script> -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>