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
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance next-performance">

	  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 100%; z-index: -2; width: 100%;">
	  		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100%; z-index: -1;">
				<h1 style="color: white; font-size: 4em; line-height: 125px; margin-bottom: 50px;">My Next Performance: </h1>
			</div>
	  	</div>

	  	<!-- <div class="col-lg-12" style="height: 100%; z-index: -1; width: 100%;">
	  		<div class="col-lg-12 performance-description-block hidden" style="background: blue; height: 100%; z-index: -1; ">
				<h1 style="color: white; line-height: 350px;" class=""><?php echo e($performance->description); ?></h1>
			</div>
	  	</div> -->

		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center performance-main">
			<h1 class='text-center'><?php echo e($performance->name); ?></h1>
			<h1 class="performance-date"><?php echo e(date('d F Y', strtotime($performance->performanceDate))); ?></h2>
			<div class="shadow"></div>
			<img class="img-responsive" src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>">
		</div>

	</div>
	<?php else: ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance animated fadeInDown" style="margin-bottom: 5px;">

		<div class="col-lg-6 col-lg-offset-3 performance-description-container" style="position: absolute; left: 0; top: 0; height: 100%; background-color: white;">
		  	<div class="row" style="height: 100%;">
		  		<div class="col-lg-12 performance-description-block hidden" style="background: blue; height: 100%; z-index: -1;">
					<h1 style="color: white; line-height: 250px;" class=""><?php echo e($performance->description); ?></h1>
				</div>
		  	</div>
		</div>

		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 text-center performance-main" style="height: 600px;">
			<h1 class='text-center'><?php echo e($performance->name); ?></h1>
			<h1 class="performance-date"><?php echo e(date('d F Y', strtotime($performance->performanceDate))); ?></h2>
			<div class="shadow"></div>
			<img class="img-responsive"  src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>">
		</div>

	</div>
	<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>