$(document).ready(function(){

    // photoblog viewport cheker
    $('.fotoblog').addClass("hideme").viewportChecker({
        classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
        offset: 300
    });

    $('.fotoblog-tekst').addClass("hideme").viewportChecker({
        classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible
        offset: 300
    });

    $('.fotoblog-date').addClass("hideme").viewportChecker({
        classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
        offset: 300
    });

    $('.img-wrapper > img').hover(
        function(){
            var img = $(this);
            var fotoblogTitle = img.parent().prev().find('.fotoblog-tekst');
            var fotoblogDate = img.parent().prev().find('.fotoblog-date');
            fotoblogTitle.removeClass('fadeOutLeft').addClass('fadeInLeft');
            fotoblogDate.removeClass('fadeOutDown').addClass('fadeInUp');
        },
        function(){
            var img = $(this);
            var fotoblogTitle = img.parent().prev().find('.fotoblog-tekst');
            var fotoblogDate = img.parent().prev().find('.fotoblog-date');
            fotoblogTitle.removeClass('fadeInLeft').addClass('fadeOutLeft');
            fotoblogDate.removeClass('fadeInUp').addClass('fadeOutDown');
        }
    );

});
