<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/agendafragments/basic.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/agendafragments/style.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="agenda-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex; justify-content: center; height: 100vh;">

	<div class="t">
	    <div class="tc rel">
	        <div class="book" id="book">
				<?php $__currentLoopData = $agendafragments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agendafragment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	            	<div class="page"><img src="/uploads/agendafragments/<?php echo e($agendafragment->imagepath); ?>" alt="" /></div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		   </div>
	    </div>
	</div>

	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs ducky-container" style="position: fixed; left: 0; bottom: 0; height: 100%; z-index: 10;" >
		<img class="duck-one img-responsive" style="position: absolute; bottom: 0; right: 0; z-index: 1;" src="<?php echo e(URL::asset('/images/Agenda/eendje_1.png')); ?>" alt="explainer duckling">
		<img class="duck-two img-responsive " style="position: absolute; bottom: 0; right: 0; z-index: 0;" src="<?php echo e(URL::asset('/images/Agenda/eendje_2.png')); ?>" alt="explainer duckling">
	</div>

</div>

<script src="<?php echo e(URL::asset('js/agendafragments/jquery.min.1.7.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/agendafragments/turn.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/agendafragments/script.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>