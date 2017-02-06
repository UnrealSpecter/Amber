@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
  @foreach ($categories as $category)
    <!-- alterate slide category name in from left and right -->
      <div class="row" style="margin-bottom: 25px;">
        <div class="row category hidden">
          <div class="col-lg-1"></div>
          <div class="col-lg-3">
            @if ($category->id % 2 == 0)
              <h1 class="animated fadeInRightBig text-left" style="font-weight: bold; color:#77aaff;">{{$category->categoryName}}</h1>
            @else
              <h1 class="animated fadeInRightBig text-left" style="font-weight: bold; color:#77aaff;">{{$category->categoryName}}</h1>
            @endif
          </div> 
          <div class="col-lg-8">
          </div>
        </div>
        @foreach($category->entries as $entry)
          <div class="row category hidden">
              <div class="col-lg-1"></div>
              <div class="col-lg-3">
                <h3 class="animated fadeInLeft text-left" style="color: white;">{{$entry->leftSide}}</h3>
              </div>
              <div class="col-lg-7">
                <h3 class="animated fadeInRight text-left" style="color: white; font-style: italic;">{{$entry->rightSide}}</h3>
                <!-- <hr class="animated fadeInRight" style="width: 100%"> -->
              </div>
              <div class="col-lg-1"></div>
          </div>
        @endforeach
      </div>
  @endforeach

  <script>
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
  </script>

@endsection