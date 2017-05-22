
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.performances-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
		<h1> Edit Performance entry </h1>
		<form method="POST" action="<?php echo e(URL::to('/Amber/performances')); ?>/<?php echo e($performance->id); ?>" enctype="multipart/form-data">
			<div class="form-group">
			  <label for="name-input">Titel</label>
			  <input type="text" class="form-control" name="name" id="title-input" placeholder="Titel" value="<?php echo e($performance->name); ?>">
			  <label for="name-input">Description</label>
			  <input type="text" class="form-control" name="description" id="description-input" placeholder="Description" value="<?php echo e($performance->description); ?>">
              <label for="name-input">Video</label>
              <input class="form-control" name="video" type="text" value="<?php echo e($performance->video); ?>" placeholder="Performance youtube url">
              <img class="img-responsive" src="/uploads/<?php echo e($performance->mediaItem); ?>"/>
			  <input type="file" name='mediaItem' id='file'>

	          <label class="control-label" for="date">Datum van optreden</label>
	          <input class="form-control" id="date" name="performanceDate" placeholder="YYYY-MM-DD" value="<?php echo e($performance->performanceDate); ?>" type="text"/>

			  <input type="hidden" name="_method" value="PUT">
			  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			</div>
			<button type="submit" class="btn btn-lg">Edit</button>
		</form>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>