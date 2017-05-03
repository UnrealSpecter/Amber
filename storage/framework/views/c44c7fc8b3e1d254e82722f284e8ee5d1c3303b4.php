<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/performances/style.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
	<script src="<?php echo e(URL::asset('js/performances/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__currentLoopData = $performances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $performance): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<?php if($performance->id === $closestPerformanceId): ?>
	<div class="row performance next-performance">
		<!-- <div class="col-lg-1"></div> -->
		<div class="col-lg-6 text-center performance-description-container" style="position: relative; left: 0; height: 400px; box-sizing: border-box; /*display: flex; align-items: center;*/ background: transparent;">
		  	<div class="row" style="height: 100%; position: absolute; z-index: -1; width: 100%;">
		  		<div class="col-lg-12 performance-description-block hidden" style="background: blue; height: 100%; z-index: -1; ">
					<h1 style="color: white; line-height: 350px;" class=""><?php echo e($performance->description); ?></h1>
				</div>
		  	</div>
		  	<div class="row" style="height: 100%; position: absolute; z-index: -2; width: 100%;">
		  		<div class="col-lg-12 text-center" style="height: 100%; z-index: -1;">
					<h1 style="color: white; font-size: 4em; line-height: 350px;">My Next Performance: </h1>
				</div>
		  	</div>
		</div>
		<div class="col-lg-6 text-center perfomance-main" style="height: 400px; box-sizing: border-box;">
			<h1 class='text-center' style="color: white;"><?php echo e($performance->name); ?></h1>
			<h1 style="font-size: 5em; color: white;"><?php echo e(date('d F Y', strtotime($performance->performanceDate))); ?></h2>
			<img class="center-block img-responsive" style="position: absolute; z-index: -1; top: 0; left: 0; height: 100%; width: 100%;" src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>">
		</div>
		<!-- <div class="col-lg-1"></div> -->
	</div>
	<?php else: ?>
	<div class="row performance animated fadeInDown">
		<div class="col-lg-2"></div>
		<div class="col-lg-4 text-center performance-description-container" style="position: relative; left: 0; height: 300px; box-sizing: border-box; /*display: flex; align-items: center;*/ background: transparent;">
		  	<div class="row" style="height: 100%;">
		  		<div class="col-lg-12 performance-description-block hidden" style="background: blue; height: 100%; z-index: -1;">
					<h1 style="color: white; line-height: 250px;" class=""><?php echo e($performance->description); ?></h1>
				</div>
		  	</div>
		</div>
		<div class="col-lg-4 text-center perfomance-main" style="height: 300px; box-sizing: border-box; /*display: flex; align-items: center;*/">
			<h1 class='text-center' style="color: white;"><?php echo e($performance->name); ?></h1>
			<h1 style="font-size: 5em; color: white;"><?php echo e(date('d F Y', strtotime($performance->performanceDate))); ?></h2>
			<img class="center-block img-responsive" style="position: absolute; z-index: -1; top: 0; left: 0; height: 100%; width: 100%;" src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>">
		</div>
		<div class="col-lg-2"></div>
	</div>
	<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>