<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(URL::asset('css/cv/style.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
	<script src="<?php echo e(URL::asset('js/cv/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="cv col-lg-10 col-lg-offset-2 col-md-11 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 category hidden" style="margin-top: 50px;">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php if($category->id % 2 == 0): ?>
					<h1 class="animated fadeInRightBig text-left category-name"><?php echo e($category->categoryName); ?></h1>
					<?php else: ?>
					<h1 class="animated fadeInRightBig text-left category-name"><?php echo e($category->categoryName); ?></h1>
					<?php endif; ?>
				</div>
			</div>
			<?php $__currentLoopData = $category->entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 category hidden">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<h3 class="animated fadeInLeft text-left entry-left"><?php echo e($entry->leftSide); ?></h3>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
						<h3 class="animated fadeInRight text-left entry-right" ><?php echo e($entry->rightSide); ?></h3>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>