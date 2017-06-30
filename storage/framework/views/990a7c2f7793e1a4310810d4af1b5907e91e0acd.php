<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.photos-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px; margin-bottom: 25px;">
		<h1> Edit Fotoblog entry </h1>
		<form method="POST" action="<?php echo e(URL::to('/Amber/photos')); ?>/<?php echo e($fotoblog->id); ?>" enctype="multipart/form-data">
			<div class="form-group">
			  <label for="name-input">Titel</label>
			  <input type="text" class="form-control" name="title" id="title-input" placeholder="Titel" value="<?php echo e($fotoblog->title); ?>">
			  <label for="name-input">Description</label>
			  <input type="text" class="form-control" name="description" id="description-input" placeholder="Description" value="<?php echo e($fotoblog->description); ?>">
			  <img class="img-responsive" src="/uploads/<?php echo e($fotoblog->image); ?>"/>
			  <input type="file" name='image' id='file'>
			  <input type="hidden" name="_method" value="PUT">
			  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			</div>
			<button type="submit" class="btn btn-lg">Edit</button>
		</form>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>