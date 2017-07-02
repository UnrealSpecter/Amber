<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('plugins/justified-gallery/css/justifiedGallery.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/works/style.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
	<script src="https://code.jquery.com/jquery-2.1.0.min.js" integrity="sha256-8oQ1OnzE2X9v4gpRVRMb1DWHoPHJilbur1LP9ykQ9H0=" crossorigin="anonymous"></script>
	<script src="<?php echo e(URL::asset('plugins/justified-gallery/js/jquery.justifiedGallery.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/works/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.works-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="col-lg-10 col-lg-offset-1" style="margin-top: 20px;">
		<div id="works-backend-gallery" class="justified-gallery">
			<?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<a class="work animated slideInLeft hidden" href="/uploads/works/<?php echo e($work->imagepath); ?>">
					<div style="padding-right: 15px; position: absolute; height: 50px; width: 100%; right: 0; z-index: 100">
						<form method="GET" action="<?php echo e(URL::to('/Amber/works')); ?>/<?php echo e($work->id); ?>/edit" enctype="multipart/form-data">
							<button type="submit" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-pencil"></span> Edit
							</button>
						</form>
						<form method="POST" action="<?php echo e(URL::to('/Amber/works')); ?>/<?php echo e($work->id); ?>" enctype="multipart/form-data">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<button type="submit" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-remove"></span> Delete
							</button>
						</form>
					</div>
					<img src="/uploads/works/thumbs/<?php echo e($work->imagepath); ?>"/>
					<div class="caption animated fadeInUp">
						<div><?php echo e($work->title); ?></div>
						<?php if($work->dimensions): ?>
						<div><?php echo e($work->dimensions); ?></div>
						<?php endif; ?>
						<div><?php echo e($work->workDate); ?></div>
					</div>
				</a>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>