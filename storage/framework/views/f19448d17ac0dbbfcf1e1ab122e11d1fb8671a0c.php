<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/agendafragments/basic.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/agendafragments/style.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
	<script src="<?php echo e(URL::asset('js/agendafragments/jquery.min.1.7.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/agendafragments/modernizr.2.5.3.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/agendafragments/basic.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/agendafragments/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="agenda-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex; justify-content: center; height: 100vh;">

	<div class="flipbook-viewport">
		<div class="container">
			<div class="flipbook">
				<?php $__currentLoopData = $agendafragments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agendafragment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<div style="background-image:url('/uploads/agendafragments/<?php echo e($agendafragment->imagepath); ?>')"></div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs ducky-container" style="position: fixed; right: 0; bottom: 0; height: 100%; z-index: 10;" >
		<img class="duck-one img-responsive" style="position: absolute; bottom: 0; right: 0; z-index: 1;" src="<?php echo e(URL::asset('/images/Agenda/eendje_1.png')); ?>" alt="explainer duckling">
		<img class="duck-two img-responsive " style="position: absolute; bottom: 0; right: 0; z-index: 0;" src="<?php echo e(URL::asset('/images/Agenda/eendje_2.png')); ?>" alt="explainer duckling">
	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>