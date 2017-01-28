
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
	<h1> Edit Performance entry </h1>
	<form method="POST" action="<?php echo e(URL::to('/Amber/CV')); ?>/<?php echo e($cvEntry->id); ?>" enctype="multipart/form-data">
		<div class="form-group">
		  <label for="name-input">Linkerkant</label>
		  <input type="text" class="form-control" name="leftSide" id="title-input" placeholder="Titel" value="<?php echo e($cvEntry->leftSide); ?>">
		  <label for="name-input">Rechterkant</label>
		  <input type="text" class="form-control" name="rightSide" id="description-input" placeholder="Description" value="<?php echo e($cvEntry->rightSide); ?>">
		  <label for="name-input">Categorie</label>
	      <select class="form-control" name="category_id">
	          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	            <option value=<?php echo e($category->id); ?> <?php echo e($cvEntry->category_id == $category->id ? 'selected="selected"' : ''); ?>><?php echo e($category->categoryName); ?></option>
	          <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	      </select>

		  <input type="hidden" name="_method" value="PUT">
		  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		</div>
		<button type="submit" class="btn btn-lg">Edit</button>
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>