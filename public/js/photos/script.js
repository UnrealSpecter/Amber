$(document).ready(function(){

    // photoblog viewport cheker
    $('.fotoblog').addClass("hideme").viewportChecker({
        classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
        offset: 300
    });

    // $('.fotoblog-tekst').addClass("hideme").viewportChecker({
    //     classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible
    //     offset: 300
    // });
    //
    // $('.fotoblog-date').addClass("hideme").viewportChecker({
    //     classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
    //     offset: 300
    // });
    console.log();
    $('.img-wrapper > img').hover(
        function(){
            if($(window).width() > 991){
                var img = $(this);
                var fotoblogTitle = img.parent().prev().find('.fotoblog-tekst');
                var fotoblogDate = img.parent().prev().find('.fotoblog-date');
                fotoblogTitle.removeClass('hidden animated fadeOutLeft').addClass('animated fadeInLeft');
                fotoblogDate.removeClass('hidden animated fadeOutDown').addClass('animated fadeInUp');
            }
        },
        function(){
            if($(window).width() > 991){
                var img = $(this);
                var fotoblogTitle = img.parent().prev().find('.fotoblog-tekst');
                var fotoblogDate = img.parent().prev().find('.fotoblog-date');
                fotoblogTitle.removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
                fotoblogDate.removeClass('animated fadeInUp').addClass('animated fadeOutDown');
            }
        }
    );

    $('.img-wrapper > img').on('click', function(){

        var myElement = document.getElementById($(this).attr('id'));
        var hammertime = new Hammer.Manager(myElement);
        hammertime.add(new Hammer.Press({
            event: 'press',
            pointer: 1,
            threshold: 1000,
            time: 100,
        }));


        hammertime.on('press', function(ev) {
            console.log('press');
            var img = $(myElement);
            var fotoblogTitle = img.parent().prev().find('.fotoblog-tekst');
            var fotoblogDate = img.parent().prev().find('.fotoblog-date');
            fotoblogTitle.removeClass('hidden animated fadeOutLeft').addClass('animated fadeInLeft');
            fotoblogDate.removeClass('hidden animated fadeOutDown').addClass('animated fadeInUp');
        });

        hammertime.on('pressup', function(ev) {
            console.log('pressup');
            var img =  $(myElement);
            var fotoblogTitle = img.parent().prev().find('.fotoblog-tekst');
            var fotoblogDate = img.parent().prev().find('.fotoblog-date');
            fotoblogTitle.removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
            fotoblogDate.removeClass('animated fadeInUp').addClass('animated fadeOutDown');
        });

    });

});
