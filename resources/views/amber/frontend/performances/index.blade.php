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

		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 main-description sub-container invisible">
		   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance-description-block">
			   <div class="youtube-button-container col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				   <h1 class="performance-name-main">{{$performance->name}}</h1>
			   </div>
			   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description">{{ $performance->description }}</div>
			   @if($performance->video)
			   <div class="youtube-button-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
				   <a class="youtube-button">WATCH VIDEO</a>
			   </div>
			   @endif
		   </div>
	   </div>

	   <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 short-description sub-container">
		   <h1 class="performance-name-short">{{$performance->name}}</h1>
		   <h1 class="performance-date">{{date('d F Y', strtotime($performance->performanceDate))}}</h2>
		   <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
   				<a class="meer-button">MORE INFO</a>
   			</div>
	   </div>

	   <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 sub-container">
		   <div class="shadow"></div>
		   <img class="img-responsive" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}" style="height: 100%; width: 100%;">
	   </div>

	   @if($performance->video)
	   <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 video-container sub-container invisible">
		   <iframe style="z-index: 10;" width="100%" height="100%" src="https://www.youtube.com/embed/{{ $performance->video }}"></iframe>
		   <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
   				<a class="terug-button">BACK</a>
   			</div>
	   </div>
	   @endif

	</div>
	@else
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance animated fadeInDown" style="margin-bottom: 5px;">

		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 main-description sub-container invisible">
		   <div class="col-lg-12 performance-description-block">
			   <div class="youtube-button-container col-lg-12">
				   <h1 class="performance-name-main">{{$performance->name}}</h1>
			   </div>
			   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description">{{ $performance->description }}</div>
			   @if($performance->video)
			   <div class="youtube-button-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
				   <a class="youtube-button">WATCH VIDEO</a>
			   </div>
			   @endif
		   </div>
	   </div>

		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 short-description sub-container">
	   		 <h1 class="performance-name-short">{{$performance->name}}</h1>
	   		 <h1 class="performance-date">{{date('d F Y', strtotime($performance->performanceDate))}}</h2>
	   		 <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   			  <a class="meer-button">MORE INFO</a>
	   		  </div>
	   	 </div>

	   	 <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 sub-container">
	   		 <div class="shadow"></div>
	   		 <img class="img-responsive" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}" style="height: 100%; width: 100%;">
	   	 </div>

	   	 @if($performance->video)
	   	 <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 video-container sub-container invisible">
	   		 <iframe style="z-index: 10;" width="100%" height="100%" src="https://www.youtube.com/embed/{{ $performance->video }}"></iframe>
	   		 <div class="meer-info-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
	   			  <a class="terug-button">BACK</a>
	   		  </div>
	   	 </div>
	   	 @endif

	</div>
	@endif
	@endforeach
@endsection
