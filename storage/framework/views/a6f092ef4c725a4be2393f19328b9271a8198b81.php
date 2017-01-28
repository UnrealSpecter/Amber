<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('amber.resources.photos-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php $__currentLoopData = $fotoblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fotoblog): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<div class="container col-lg-12 ">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10" style="border: solid 1px black">
				<div class="animated slideInLeft" style="position: absolute; top: 50%; height: 100px; border: solid black 1px; color: white;">
					<h1><?php echo e($fotoblog->title); ?></h1>
					<h2><?php echo e($fotoblog->description); ?></h2>
				</div>
				<img class="center-block fotoblog" style="width: 75%; height: 50%;" src="/uploads/<?php echo e($fotoblog->image); ?>" alt="<?php echo e($fotoblog->title); ?>">
				<!-- <h2><?php echo e(date('F d, Y', strtotime($fotoblog->created_at))); ?></h2> -->
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div>
	<a href="<?php echo e(Request::url()); ?>/<?php echo e($fotoblog->id); ?>/edit" class="btn btn-default btn-lg">
		<span class="glyphicon glyphicon-pencil"></span> Edit
	</a>
    <form method="POST" action="<?php echo e(URL::to('/Amber/photos')); ?>/<?php echo e($fotoblog->id); ?>" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<button type="submit" class="btn btn-default btn-lg">
			<span class="glyphicon glyphicon-remove"></span> Delete
		</button>
    </form>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>