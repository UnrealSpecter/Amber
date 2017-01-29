
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.frontend-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div id="works-gallery" class="justified-gallery">
				<?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<a class="work animated slideInLeft hidden swipebox" href="/uploads/works/<?php echo e($work->imagepath); ?>">
						<div style="position: absolute; height: 50px; width: 50px; right: 0; z-index: 100">
						</div>
						<img src="/uploads/works/<?php echo e($work->imagepath); ?>"/>
						<div class="caption">
							<div>
								<h1 class="text-center"><?php echo e($work->title); ?></h1>
							</div>
							<hr width="50%">
							<div>
								<h3 class="text-center"><?php echo e($work->dimensions); ?></h3>
							</div>
							<div>
								<p style='font-style: italic; top: 10px; right: 10px; position: absolute; '><?php echo e($work->workDate); ?></p>
							</div>
						</div>
					</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</div>
		</div>
		<div class="col-lg-1"></div>
	<script>
	//loop categories and store them in the array for use
	var works = [];
	$('.work').each(function(index, object) {
		works.push(object);
	});
	//set start index
	var index = 0;
	//setInterval half a second and loop through categories and removeClass
	var interval = setInterval(function() { 
		$(works[index]).removeClass('hidden');
		index++;
		if(index == works.length){
			clearInterval(interval);
		}
	}, 250);
	</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>