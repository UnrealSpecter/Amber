@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div id="works-gallery" class="justified-gallery">
				@foreach($works as $work)
					<a class="work animated slideInLeft hidden swipebox" href="/uploads/works/{{$work->imagepath}}">
						<div style="position: absolute; height: 50px; width: 50px; right: 0; z-index: 100">
						</div>
						<img src="/uploads/works/{{$work->imagepath}}"/>
						<div class="caption">
							<div>
								<h1 class="text-center">{{$work->title}}</h1>
							</div>
							<hr width="50%">
							<div>
								<h3 class="text-center">{{$work->dimensions}}</h3>
							</div>
							<div>
								<p style='font-style: italic; top: 10px; right: 10px; position: absolute; '>{{$work->workDate}}</p>
							</div>
						</div>
					</a>
				@endforeach
			</div>
		</div>
		<div class="col-lg-1"></div>
	<script>
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
	</script>

@endsection
