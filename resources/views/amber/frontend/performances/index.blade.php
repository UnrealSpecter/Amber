@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
	@foreach ($performances as $performance)
	@if($performance->id === $closestPerformanceId)
	<div class="row performance next-performance">
		<!-- <div class="col-lg-1"></div> -->
		<div class="col-lg-6 text-center performance-description-container" style="position: relative; left: 0; height: 400px; box-sizing: border-box; /*display: flex; align-items: center;*/ background: transparent;">
		  	<div class="row" style="height: 100%; position: absolute; z-index: -1; width: 100%;">
		  		<div class="col-lg-12 performance-description-block hidden" style="background: blue; height: 100%; z-index: -1; ">
					<h1 style="color: white; line-height: 350px;" class="">{{$performance->description}}</h1>
				</div>
		  	</div>
		  	<div class="row" style="height: 100%; position: absolute; z-index: -2; width: 100%;">
		  		<div class="col-lg-12 text-center" style="height: 100%; z-index: -1;">
					<h1 style="color: white; font-size: 4em; line-height: 350px;">My Next Performance: </h1>
				</div>
		  	</div>
		</div>
		<div class="col-lg-6 text-center perfomance-main" style="height: 400px; box-sizing: border-box;">
			<h1 class='text-center' style="color: white;">{{$performance->name}}</h1>
			<h1 style="font-size: 5em; color: white;">{{date('d F', strtotime($performance->performanceDate))}}</h2>
			<img class="center-block img-responsive" style="position: absolute; z-index: -1; top: 0; left: 0; height: 100%; width: 100%;" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}">
		</div>
		<!-- <div class="col-lg-1"></div> -->
	</div>
	@else
	<div class="row performance animated fadeInDown">
		<div class="col-lg-2"></div>
		<div class="col-lg-4 text-center performance-description-container" style="position: relative; left: 0; height: 300px; box-sizing: border-box; /*display: flex; align-items: center;*/ background: transparent;">
		  	<div class="row" style="height: 100%;">
		  		<div class="col-lg-12 performance-description-block hidden" style="background: blue; height: 100%; z-index: -1;">
					<h1 style="color: white; line-height: 250px;" class="">{{$performance->description}}</h1>
				</div>
		  	</div>
		</div>
		<div class="col-lg-4 text-center perfomance-main" style="height: 300px; box-sizing: border-box; /*display: flex; align-items: center;*/">
			<h1 class='text-center' style="color: white;">{{$performance->name}}</h1>
			<h1 style="font-size: 5em; color: white;">{{date('d F Y', strtotime($performance->performanceDate))}}</h2>
			<img class="center-block img-responsive" style="position: absolute; z-index: -1; top: 0; left: 0; height: 100%; width: 100%;" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}">
		</div>
		<div class="col-lg-2"></div>
	</div>
	<!-- opmaak voor closestPerformance -->
	@endif
	@endforeach

	<script>
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

	</script>
@endsection