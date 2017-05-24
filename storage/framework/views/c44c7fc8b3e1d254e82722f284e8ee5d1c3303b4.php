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

	<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="z-index: -2; width: 100%; display: flex; align-items: center; justify-content: center; height: 150px;">
		<h1 style="color: white; font-size: 4em; margin: 0; padding: 20px;">Upcoming </h1>
	</div> -->

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance next-performance" style="margin-bottom: 5px;">

		<div class="col-lg-8 col-lg-offset-2 main-description sub-container invisible">
		   <div class="col-lg-12 performance-description-block">
			   <div class="youtube-button-container col-lg-12">
				   <h1 style="color: white; font-family: Georgia; font-size: 3em; text-align: center;"><?php echo e($performance->name); ?></h1>
			   </div>
			   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description"><?php echo e($performance->description); ?></div>
			   <?php if($performance->video): ?>
			   <div class="youtube-button-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
				   <a class="youtube-button">BEKIJK DE VIDEO</a>
			   </div>
			   <?php endif; ?>
		   </div>
	   </div>

	   <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 short-description sub-container">
		   <h1 style="font-family: Georgia; font-size: 3em; color: white; font-weight: 300; text-align: center;"><?php echo e($performance->name); ?></h1>
		   <h1 class="performance-date"><?php echo e(date('d F Y', strtotime($performance->performanceDate))); ?></h2>
		   <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
   				<a class="meer-button">MEER INFORMATIE</a>
   			</div>
	   </div>

	   <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 sub-container">
		   <div class="shadow"></div>
		   <img class="img-responsive" src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>" style="height: 750px; width: 100%;">
	   </div>

	   <?php if($performance->video): ?>
	   <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 video-container sub-container invisible">
		   <iframe style="z-index: 10;" width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo e($performance->video); ?>"></iframe>
		   <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
   				<a class="terug-button">Terug</a>
   			</div>
	   </div>
	   <?php endif; ?>

	</div>
	<?php else: ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance animated fadeInDown" style="margin-bottom: 5px; height: 600px;">

		<div class="col-lg-6 col-lg-offset-3 main-description sub-container invisible">
		   <div class="col-lg-12 performance-description-block">
			   <div class="youtube-button-container col-lg-12">
				   <h1 style="color: white; font-family: Georgia; font-size: 5em; text-align: center;" class=""><?php echo e($performance->name); ?></h1>
			   </div>
			   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description"><?php echo e($performance->description); ?></div>
			   <?php if($performance->video): ?>
			   <div class="youtube-button-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
				   <a class="youtube-button">BEKIJK DE VIDEO</a>
			   </div>
			   <?php endif; ?>
		   </div>
	   </div>

		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 short-description sub-container">
	   		 <h1 style="text-align: center; font-family: Georgia; font-size: 5em; color: white; font-weight: 300;"><?php echo e($performance->name); ?></h1>
	   		 <h1 class="performance-date"><?php echo e(date('d F Y', strtotime($performance->performanceDate))); ?></h2>
	   		 <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   			  <a class="meer-button">MEER INFORMATIE</a>
	   		  </div>
	   	 </div>

	   	 <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 sub-container">
	   		 <div class="shadow"></div>
	   		 <img class="img-responsive" src="/uploads/<?php echo e($performance->mediaItem); ?>" alt="<?php echo e($performance->name); ?>" style="height: 600px; width: 100%;">
	   	 </div>

	   	 <?php if($performance->video): ?>
	   	 <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 video-container sub-container invisible">
	   		 <iframe style="z-index: 10;" width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo e($performance->video); ?>"></iframe>
	   		 <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   			  <a class="terug-button">Terug</a>
	   		  </div>
	   	 </div>
	   	 <?php endif; ?>

	</div>
	<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>