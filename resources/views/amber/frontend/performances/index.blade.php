@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
  @foreach ($performances as $performance)
  <div class="row performance hidden">
  	<div class="col-lg-1"></div>
  	<div class="col-lg-5">
  		<h1 class="center-block" style="color: lightgrey; font-style: italic; font-size: 4em;">My Next Performance:</h1> 
  	</div>
  	<div class="col-lg-4 text-center">
		<h1 class='text-center' style="color: white;">{{$performance->name}}</h1>
		<!-- <h1 style="color: lightgrey;">{{$performance->description}}</h1> -->
		<h1 style="font-size: 5em; color: white;">{{date('d F', strtotime($performance->performanceDate))}}</h2>
		<hr style='width: 100%;'>
		<img class="center-block img-responsive" style="position: absolute; z-index: -1; top: 0; left: 0;" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}">
		<hr style='width: 100%;'>
  	</div>
  	<div class="col-lg-2"></div>
  </div>
  @endforeach
	<script>
		//loop categories and store them in the array for use
		var performances = [];
		$('.performance').each(function(index, object) {
		  performances.push(object);
		});
		//set start index
		var index = 0;
		//setInterval half a second and loop through categories and removeClass
		var interval = setInterval(function() { 
		  $(performances[index]).removeClass('hidden');
		  if(index == performances.length - 1){
		  	$(performances[index]).addClass('next-performance');
		  	$('html, body').animate({
                    scrollTop: $(".next-performance").offset().top
            }, 2000);
		    clearInterval(interval);
		  }
		  index++;
		}, 750);
	</script>

@endsection
