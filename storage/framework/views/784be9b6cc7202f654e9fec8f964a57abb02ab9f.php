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
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.agenda-fragments-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="agenda-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex; justify-content: center; height: 100vh;">

	<div class="flipbook-viewport">
		<div class="container">
			<div class="flipbook">
				<?php $__currentLoopData = $agendafragments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agendafragment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<div style="background-image:url('/uploads/agendafragments/<?php echo e($agendafragment->imagepath); ?>')">
						<a href="<?php echo e(Request::url()); ?>/<?php echo e($agendafragment->id); ?>/edit" class="btn btn-default btn-lg" style="float: left;">
							<span class="glyphicon glyphicon-pencil"></span> Edit
						</a>
						<form method="POST" action="<?php echo e(URL::to('/Amber/agendafragments')); ?>/<?php echo e($agendafragment->id); ?>" enctype="multipart/form-data">
				        	<input type="hidden" name="_method" value="DELETE">
				        	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				        	<button type="submit" class="btn btn-default btn-lg">
				        		<span class="glyphicon glyphicon-remove"></span> Delete
				        	</button>
				        </form>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<!-- <div style="background-image:url(https://pbs.twimg.com/media/CQyQbkiUcAEhoQl.jpg)"></div>
				<div style="background-image:url(http://i3.kym-cdn.com/photos/images/newsfeed/000/925/494/218.png_large)"></div>
				<div style="background-image:url(https://i.ytimg.com/vi/pDgM1ug0wVQ/maxresdefault.jpg)"></div>
				<div style="background-image:url(http://p2.i.ntere.st/0fa87ebd7b66b5f7aa6baa24b6fdacb5_480.jpg)"></div>
				<div style="background-image:url(https://i.gyazo.com/88d02d711b1be8733bcb52d5050c5457.png)"></div>
				<div style="background-image:url(http://files.gamebanana.com/img/ico/sprays/57822c19e1ad1.png)"></div>
				<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/28087/3.0)"></div>
				<div style="background-image:url(http://cdn.i.ntere.st/p/19449802/image)"></div>
				<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/4339/3.0)"></div>
				<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/55338/3.0)"></div>
				<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/93064/3.0)"></div>
				<div style="background-image:url(http://static.tumblr.com/b6e1cf0f096282785050ff2f77e49d6a/smihjlx/FHgmwwb2u/tumblr_static_kappa.gif)"></div> -->

			</div>
		</div>
	</div>

</div>

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>