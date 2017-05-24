@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/performances/style.css')}}"/>
@endsection
@section('js')
	<script src="{{ URL::asset('js/performances/script.js') }}"></script>
@endsection
@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
	@foreach ($performances as $performance)
	@if($performance->id === $closestPerformanceId)

	<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="z-index: -2; width: 100%; display: flex; align-items: center; justify-content: center; height: 150px;">
		<h1 style="color: white; font-size: 4em; margin: 0; padding: 20px;">Upcoming </h1>
	</div> -->

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance next-performance" style="margin-bottom: 5px;">

		<div class="col-lg-8 col-lg-offset-2 main-description sub-container invisible">
		   <div class="col-lg-12 performance-description-block">
			   <div class="youtube-button-container col-lg-12">
				   <h1 style="color: white; font-family: Georgia; font-size: 3em; text-align: center;">{{$performance->name}}</h1>
			   </div>
			   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description">{{ $performance->description }}</div>
			   @if($performance->video)
			   <div class="youtube-button-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
				   <a class="youtube-button">BEKIJK DE VIDEO</a>
			   </div>
			   @endif
		   </div>
	   </div>

	   <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 short-description sub-container">
		   <h1 style="font-family: Georgia; font-size: 3em; color: white; font-weight: 300; text-align: center;">{{$performance->name}}</h1>
		   <h1 class="performance-date">{{date('d F Y', strtotime($performance->performanceDate))}}</h2>
		   <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
   				<a class="meer-button">MEER INFORMATIE</a>
   			</div>
	   </div>

	   <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 sub-container">
		   <div class="shadow"></div>
		   <img class="img-responsive" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}" style="height: 750px; width: 100%;">
	   </div>

	   @if($performance->video)
	   <div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 video-container sub-container invisible">
		   <iframe style="z-index: 10;" width="100%" height="100%" src="https://www.youtube.com/embed/{{ $performance->video }}"></iframe>
		   <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
   				<a class="terug-button">Terug</a>
   			</div>
	   </div>
	   @endif

	</div>
	@else
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance animated fadeInDown" style="margin-bottom: 5px; height: 600px;">

		<div class="col-lg-6 col-lg-offset-3 main-description sub-container invisible">
		   <div class="col-lg-12 performance-description-block">
			   <div class="youtube-button-container col-lg-12">
				   <h1 style="color: white; font-family: Georgia; font-size: 5em; text-align: center;" class="">{{$performance->name}}</h1>
			   </div>
			   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description">{{ $performance->description }}</div>
			   @if($performance->video)
			   <div class="youtube-button-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
				   <a class="youtube-button">BEKIJK DE VIDEO</a>
			   </div>
			   @endif
		   </div>
	   </div>

		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 short-description sub-container">
	   		 <h1 style="text-align: center; font-family: Georgia; font-size: 5em; color: white; font-weight: 300;">{{$performance->name}}</h1>
	   		 <h1 class="performance-date">{{date('d F Y', strtotime($performance->performanceDate))}}</h2>
	   		 <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   			  <a class="meer-button">MEER INFORMATIE</a>
	   		  </div>
	   	 </div>

	   	 <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 sub-container">
	   		 <div class="shadow"></div>
	   		 <img class="img-responsive" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}" style="height: 600px; width: 100%;">
	   	 </div>

	   	 @if($performance->video)
	   	 <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 video-container sub-container invisible">
	   		 <iframe style="z-index: 10;" width="100%" height="100%" src="https://www.youtube.com/embed/{{ $performance->video }}"></iframe>
	   		 <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   			  <a class="terug-button">Terug</a>
	   		  </div>
	   	 </div>
	   	 @endif

	</div>
	@endif
	@endforeach
@endsection
