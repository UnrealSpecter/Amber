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
	<div class="container col-lg-12 ">
		<div class="row">
			<div class="col-lg-12" style="">
				<!-- <div class="fotoblog-tekst animated slideInLeft" style="position: absolute; top: 30%; height: 100px; rgba(255,0,0,0.4); /*border: solid black 1px;*/ color: white; z-index: 9999;">
				</div> -->

				<div class="photo-tekst-container fotoblog-tekst" style="position: absolute; top: 30%; width: 300px; z-index: 9999;">
					<div class="background-block" style="background: red; filter: alpha(opacity=30); -moz-opacity: 0.3; opacity: 0.3; position: absolute; top: 0; left: 0; width: 100%;">
					</div>

					<div class="text-block" style="position: absolute; top: 0; left: 0; width: 100%; color: white; text-align: center;">
						<h1><?php echo e($fotoblog->title); ?></h1>
						<?php if(!empty($fotoblog->description)): ?>
							<hr style="width: 50%">
							<h3><?php echo e($fotoblog->description); ?></h3>
						<?php endif; ?>
					</div>

				</div>
				<img class="center-block fotoblog img-responsive" style="width: 75%; height: 50%;" src="/uploads/<?php echo e($fotoblog->image); ?>" alt="<?php echo e($fotoblog->title); ?>">
				<!-- <p class="text-center"><?php echo e(date('d F, Y', strtotime($fotoblog->created_at))); ?></p> -->

				<div class="photo-tekst-container fotoblog-date" style="position: absolute; top: 30%; right: 0%; width: 200px; height: 200px; z-index: 9999;">
					<div class="background-block" style="background: red; filter: alpha(opacity=30); -moz-opacity: 0.3; opacity: 0.3; position: absolute; top: 0; left: 0; height: inherit; width: 100%;">
					</div>
					<div class="text-block" style="position: absolute; top: 0; left: 0; width: 100%; height: inherit; color: white; text-align: center;">
						<h3 class="text-center"><?php echo e(date('d F', strtotime($fotoblog->created_at))); ?></p>
						<hr style="width: 50%">
						<h1 class="text-center" style="font-weight: bold;"><?php echo e(date('Y', strtotime($fotoblog->created_at))); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" style="height: 150px;">
			</div>
		</div>
	</div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>