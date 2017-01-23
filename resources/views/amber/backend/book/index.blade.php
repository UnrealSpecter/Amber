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

<h1>Behold, the Book of the Dankest Twitch Chat Memes</h1>
<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<div style="background-image:url(https://pbs.twimg.com/media/CQyQbkiUcAEhoQl.jpg)"></div>
			<div style="background-image:url(http://i3.kym-cdn.com/photos/images/newsfeed/000/925/494/218.png_large)"></div>
			<div style="background-image:url(https://i.ytimg.com/vi/pDgM1ug0wVQ/maxresdefault.jpg)"></div>
			<div style="background-image:url(http://p2.i.ntere.st/0fa87ebd7b66b5f7aa6baa24b6fdacb5_480.jpg)"></div>
			<div style="background-image:url(https://i.gyazo.com/88d02d711b1be8733bcb52d5050c5457.png)"></div>
			<div style="background-image:url(http://i1.kym-cdn.com/photos/images/facebook/001/037/049/75d.png)"></div>
			<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/28087/3.0)"></div>
			<div style="background-image:url(http://cdn.i.ntere.st/p/19449802/image)"></div>
			<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/4339/3.0)"></div>
			<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/55338/3.0)"></div>
			<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/93064/3.0)"></div>
			<div style="background-image:url(http://static.tumblr.com/b6e1cf0f096282785050ff2f77e49d6a/smihjlx/FHgmwwb2u/tumblr_static_kappa.gif)"></div>
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
