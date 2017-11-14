<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('plugins/justified-gallery/css/justifiedGallery.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(URL::asset('plugins/swipebox/css/swipebox.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/works/style.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
	<script src="https://code.jquery.com/jquery-2.1.0.min.js" integrity="sha256-8oQ1OnzE2X9v4gpRVRMb1DWHoPHJilbur1LP9ykQ9H0=" crossorigin="anonymous"></script>
	<script src="<?php echo e(URL::asset('plugins/justified-gallery/js/jquery.justifiedGallery.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('plugins/swipebox/js/jquery.swipebox.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/works/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="col-lg-10 col-lg-offset-1">
			<div id="works-gallery" class="justified-gallery">
				<?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<a class="work animated slideInLeft hidden swipebox" href="/uploads/works/<?php echo e($work->imagepath); ?>">
						<img src="/uploads/works/<?php echo e($work->imagepath); ?>"/>
						<div class="caption animated fadeInUp">
							<div>
								<h1 class="text-center"><?php echo e($work->title); ?></h1>
							</div>
							<?php if($work->dimensions): ?>
							<hr width="50%">
							<div>
								<h3 class="text-center"><?php echo e($work->dimensions); ?></h3>
							</div>
							<?php endif; ?>
							<div>
								<p style='font-style: italic; top: 10px; left: 10px; position: absolute;8'><?php echo e($work->workDate); ?></p>
							</div>
						</div>
					</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</div>
		</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>