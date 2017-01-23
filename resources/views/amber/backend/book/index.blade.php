<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="../js/jquery.min.1.7.js"></script>
<script type="text/javascript" src="../js/modernizr.2.5.3.min.js"></script>
</head>
<body>

<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
			<div style="background-image:url(https://www.cleverfiles.com/howto/wp-content/uploads/2016/08/mini.jpg)"></div>
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

</body>
</html>
