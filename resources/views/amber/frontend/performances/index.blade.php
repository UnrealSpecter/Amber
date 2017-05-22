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
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance next-performance">

	  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 100%; z-index: -2; width: 100%;">
	  		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="height: 100%; z-index: -1;">
				<h1 style="color: white; font-size: 4em; line-height: 125px; margin-bottom: 50px;">My Next Performance: </h1>
			</div>
	  	</div>

	  	<!-- <div class="col-lg-12" style="height: 100%; z-index: -1; width: 100%;">
	  		<div class="col-lg-12 performance-description-block hidden" style="background: blue; height: 100%; z-index: -1; ">
				<h1 style="color: white; line-height: 350px;" class="">{{$performance->description}}</h1>
			</div>
	  	</div> -->

		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center performance-main">
			<h1 class='text-center'>{{$performance->name}}</h1>
			<h1 class="performance-date">{{date('d F Y', strtotime($performance->performanceDate))}}</h2>
			<div class="shadow"></div>
			<img class="img-responsive" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}">
		</div>

	</div>
	@else
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 performance animated fadeInDown" style="margin-bottom: 5px; height: 600px;">

		 <div class="col-lg-6 col-lg-offset-3 main-description sub-container invisible">
	  		<div class="col-lg-12 performance-description-block">
				<div class="youtube-button-container col-lg-12">
					<h1 style="color: white; font-family: courier;" class="">{{$performance->name}}</h1>
				</div>
				<div class="col-lg-12 description">{{ $performance->description}}</div>
				<div class="youtube-button-container col-lg-12">
					<a class="youtube-button" target="_blank" href="https://google.com">BEKIJK DE VIDEO</a>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 short-description sub-container insivible">
			<h1 class='text-center'>{{$performance->name}}</h1>
			<h1 class="performance-date">{{date('d F Y', strtotime($performance->performanceDate))}}</h2>
		</div>

		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 sub-container">
			<div class="shadow"></div>
			<img class="img-responsive" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}">
		</div>

		@if($performance->video)
		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 sub-container">
			<div class="performance-video" style="height: 100%; width: 100%; background-color: red;"></div>
		</div>
		@endif

	</div>
	@endif
	@endforeach
@endsection
