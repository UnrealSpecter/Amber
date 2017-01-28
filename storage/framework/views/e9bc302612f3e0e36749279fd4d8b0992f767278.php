
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
	<h1> Edit Category </h1>
	<form method="POST" action="<?php echo e(URL::to('/Amber/CV/categories')); ?>/<?php echo e($category->id); ?>" enctype="multipart/form-data">
		<div class="form-group">
		  <label for="name-input">Categorie naam</label>
		  <input type="text" class="form-control" name="categoryName" id="title-input" placeholder="Titel" value="<?php echo e($category->categoryName); ?>">
		  <input type="hidden" name="_method" value="PUT">
		  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		</div>
		<button type="submit" class="btn btn-lg">Edit</button>
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>