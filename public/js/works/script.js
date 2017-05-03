$(document).ready(function(){

    $("#works-gallery").justifiedGallery({
        rowHeight : 300,
        maxRowHeight: 400,
        lastRow : 'nojustify',
        margins : 3
    }).on('jg.complete', function () {
        $('.swipebox').swipebox();
    });

    //loop categories and store them in the array for use
    var works = [];
    $('.work').each(function(index, object) {
        works.push(object);
    });
    //set start index
    var index = 0;
    //setInterval half a second and loop through categories and removeClass
    var interval = setInterval(function() {
        $(works[index]).removeClass('hidden');
        index++;
        if(index == works.length){
            clearInterval(interval);
        }
    }, 250);

});
