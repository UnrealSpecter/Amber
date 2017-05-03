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

    $('.performance').addClass("hideme").viewportChecker({
        classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
        offset: 300
    });

});