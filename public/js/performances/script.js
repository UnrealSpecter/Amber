$(document).ready(function(){
    //loop categories and store them in the array for use
    // var performances = [];
    // $('.performance').each(function(index, performance) {
    // 	//add hidden to each main element while storing them so they can be uncovered
    // 	$(performance).addClass('hidden');
 //  		performances.push(performance);
    // });
    // //set start index
    // var index = 0;
    // //setInterval half a second and loop through categories and removeClass
    // var interval = setInterval(function() {
    //   $(performances[index]).removeClass('hidden');
    //   if(index == performances.length - 1){
    //     clearInterval(interval);
    //   }
    //   index++;
    // }, 500);

    $('html, body').animate({
            scrollTop: $(".next-performance").offset().top
        }, 2000);

    //on click show the main description
    $('.meer-button').click(function(){
        var shortDescription = $(this).parent().parent();
        var mainDescription = shortDescription.siblings('.main-description');
        shortDescription.addClass('animated fadeOut');
        setTimeout(function () {
            shortDescription.addClass('hidden').removeClass('animated fadeOut');
            mainDescription.removeClass('invisible animated fadeOut fadeIn hidden').addClass('animated fadeIn');
        }, 750);
    });

    //on click show the video
    $('.youtube-button').click(function(){
        var mainDescription = $(this).parent().parent().parent();
        var videoContainer = mainDescription.siblings('.video-container');
        mainDescription.addClass('animated fadeOut');
        setTimeout(function () {
            mainDescription.removeClass('animated fadeOut').addClass('hidden');
            videoContainer.removeClass('invisible hidden fadeOut fadeIn').addClass('animated fadeIn');
        }, 750);
    });

    $('.terug-button').click(function(){
        var videoContainer = $(this).parent().parent();
        var shortDescription = videoContainer.siblings('.short-description');
        videoContainer.addClass('animated fadeOut');
        setTimeout(function () {
            shortDescription.removeClass('animated fadeOut hidden').addClass('animated fadeIn');
            videoContainer.addClass('hidden');
        }, 750);
    });

});
