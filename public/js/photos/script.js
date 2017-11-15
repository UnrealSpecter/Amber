$(document).ready(function(){

    // // photoblog viewport cheker
    // $('.fotoblog').addClass("hideme").viewportChecker({
    //     classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
    //     offset: 300
    // });

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

    if($(window).width() < 991){
        $('.img-wrapper > img').on('click', function(){
            var myElement = document.getElementById($(this).attr('id'));
            var hammertime = new Hammer(myElement);
            hammertime.on('tap', function(ev) {
                var element = document.getElementById(ev.target.id);
                if(!$(element).data('tapped')){
                    var img = $(element);
                    $(element).data('tapped', 1);
                    var fotoblogTitle = img.parent().prev().find('.fotoblog-tekst');
                    var fotoblogDate = img.parent().prev().find('.fotoblog-date');
                    fotoblogTitle.removeClass('hidden animated fadeOutLeft').addClass('animated fadeInLeft');
                    fotoblogDate.removeClass('hidden animated fadeOutDown').addClass('animated fadeInUp');
                }
                else {
                    var img =  $(element);
                    $(element).data('tapped', 0);
                    var fotoblogTitle = img.parent().prev().find('.fotoblog-tekst');
                    var fotoblogDate = img.parent().prev().find('.fotoblog-date');
                    fotoblogTitle.removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
                    fotoblogDate.removeClass('animated fadeInUp').addClass('animated fadeOutDown');
                }
            });
        });
    }

    //loop categories and store them in the array for use
    var fotoblogs = [];
    $('.photo-wrapper').each(function(index, object) {
        fotoblogs.push(object);
    });
    //set start index
    var index = 0;
    //setInterval half a second and loop through categories and removeClass
    var interval = setInterval(function() {
        $(fotoblogs[index]).removeClass('hidden');
        $(fotoblogs[index]).addClass('animated fadeIn');
        index++;
        if(index == fotoblogs.length){
            clearInterval(interval);
        }
    }, 250);

});
