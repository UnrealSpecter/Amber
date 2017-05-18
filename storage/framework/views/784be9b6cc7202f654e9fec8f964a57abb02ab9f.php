<?php $__env->startSection('content'); ?>
<?php echo $__env->make('amber.resources.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('amber.resources.agenda-fragments-submenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<?php $__currentLoopData = $agendafragments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agendafragment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<div style="background-image:url('/uploads/agendafragments/<?php echo e($agendafragment->imagepath); ?>')"></div>
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

<script type="text/javascript">
function loadApp() {
	// Create the flipbook
	$('.flipbook').turn({
			// Width
			width:922,
			// Height
			height:600,
			// Elevation
			elevation: 50,
			// Enable gradients
			gradients: true,
			// Auto center this flipbook
			autoCenter: true
	});
}

// Load the HTML4 version if there's not CSS transform
yepnope({
	test : Modernizr.csstransforms,
	yep: ['../js/turn.js'],
	nope: ['../js/turn.html4.min.js'],
	both: ['../css/basic.css'],
	complete: loadApp
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>