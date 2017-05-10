<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/photos/style.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(URL::asset('plugins/viewportchecker/js/viewport.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('plugins/viewportchecker/js/viewportchecker.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/photos/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__currentLoopData = $fotoblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fotoblog): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 photo-wrapper">

		<div class="info-wrapper">
			<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-0 col-xs-4 col-xs-offset-0 fotoblog-tekst" style="height: 50%;">
				<div class="info-background"></div>
				<h1><?php echo e($fotoblog->title); ?></h1>
				<?php if(!empty($fotoblog->description)): ?>
					<hr style="width: 75%">
					<h3><?php echo e($fotoblog->description); ?></h3>
				<?php endif; ?>
			</div>

			<div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 fotoblog-date">
				<div class="info-background"></div>
				<div class="date-info-wrapper">
					<h1><?php echo e(date('d F', strtotime($fotoblog->created_at))); ?></h1>
					<h3 style="font-weight: bold;"><?php echo e(date('Y', strtotime($fotoblog->created_at))); ?></h3>
				</div>
			</div>
		</div>

		<div class="img-wrapper">
			<img class="col-lg-8 col-md-9 col-sm-12 col-xs-12 center-block fotoblog img-responsive" src="/uploads/<?php echo e($fotoblog->image); ?>" alt="<?php echo e($fotoblog->title); ?>">
		</div>

	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>