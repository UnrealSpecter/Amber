
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.agenda-fragments-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px; margin-bottom: 25px;">
		<h1> Edit Fragment entry </h1>
		<form method="POST" action="<?php echo e(URL::to('/Amber/agendafragments')); ?>/<?php echo e($agendafragment->id); ?>" enctype="multipart/form-data">
            <div class="form-group">
                <img class="img-responsive" src="/uploads/agendafragments/<?php echo e($agendafragment->imagepath); ?>"/>
                <input type="file" name='image' id='file'>
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            </div>
            <button type="submit" class="btn btn-lg">Edit</button>
		</form>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>