
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="container col-lg-12">
		<div class="row">
			<!-- <div class="col-lg-12" style="width: 100%; height: 200px; box-sizing: border-box;"> -->
				<img style="max-height: 450px; width: 100%;" src="/uploads/titelblad-amber.jpg" alt="amber-titelblad">
			<!-- </div> -->
		</div>
	</div>

	


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>