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
			<h1 style="font-size: 5em; color: white;">{{date('d F Y', strtotime($performance->performanceDate))}}</h2>
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
	@endif
	@endforeach
@endsection
