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

    //on hover show the description with an animation
    $('.perfomance-main').hover(
        function() {
            var performance = $(this).siblings('.performance-description-container').find('.performance-description-block');
            if(performance.hasClass('hidden')){
                performance.removeClass('hidden');
            }
            performance.removeClass('animated slideOutLeft');
            performance.addClass('animated slideInRight');
        },
        function() {
            var performance = $(this).siblings('.performance-description-container').find('.performance-description-block');
            performance.removeClass('animated slideInRight');
            performance.addClass('animated slideOutLeft');
        }
    );

});
