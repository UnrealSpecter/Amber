$(document).ready(function(){

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
    	complete: loadApp
    });

    // $('.ducky-container').hover(
    //     function() {
    //         alert();
    //         $('.duck-one').addClass('invisible');
    //         $('.duck-two').removeClass('invisible');
    //     }, function() {
    //         alert();
    //         $('.duck-one').addClass('invisible');
    //         $('.duck-two').removeClass('invisible');
    //     }
    // );

});
