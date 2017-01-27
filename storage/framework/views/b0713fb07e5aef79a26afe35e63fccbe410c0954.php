
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('amber.resources.works-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div id="mygallery" class="justified-gallery">
		<?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<a href="/uploads/works/<?php echo e($work->imagepath); ?>">
				<div style="position: absolute; height: 50px; width: 50px; right: 0; z-index: 100">
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
				<img src="/uploads/works/<?php echo e($work->imagepath); ?>"/>
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