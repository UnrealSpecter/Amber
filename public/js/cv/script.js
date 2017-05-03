$(document).ready(function(){

    //loop categories and store them in the array for use
    var categories = [];
    $('.category').each(function(index, object) {
      categories.push(object);
    });
    //set start index
    var index = 0;
    //setInterval half a second and loop through categories and removeClass
    var interval = setInterval(function() {
      $(categories[index]).removeClass('hidden');
      index++;
      if(index == categories.length){
        clearInterval(interval);
      }
    }, 500);

});
