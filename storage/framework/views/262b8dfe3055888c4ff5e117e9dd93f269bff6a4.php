
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div id="mygallery" class="justified-gallery">
		<?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<a href="/uploads/works/<?php echo e($work->imagepath); ?>">
				<div style="position: absolute; height: 50px; width: 50px; right: 0; z-index: 100">
				</div>
				<img src="/uploads/works/thumbs/<?php echo e($work->imagepath); ?>"/>
				<div class="caption">
					<div><?php echo e($work->title); ?></div>
					<div><?php echo e($work->dimensions); ?></div>
					<div><?php echo e($work->workDate); ?></div>
				</div>
			</a>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>