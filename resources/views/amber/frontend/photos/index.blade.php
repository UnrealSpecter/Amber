@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/photos/style.css')}}"/>
@endsection
@section('js')
    <script src="{{ URL::asset('plugins/viewportchecker/js/viewport.js') }}"></script>
    <script src="{{ URL::asset('plugins/viewportchecker/js/viewportchecker.js') }}"></script>
	<script src="{{ URL::asset('js/photos/script.js') }}"></script>
@endsection
@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
	@foreach ($fotoblogs as $fotoblog)
	<div class="col-lg-12 photo-wrapper">
		<!-- <div class="fotoblog-tekst animated slideInLeft" style="position: absolute; top: 30%; height: 100px; rgba(255,0,0,0.4); /*border: solid black 1px;*/ color: white; z-index: 9999;">
		</div> -->
		<!-- <div class="photo-tekst-container fotoblog-tekst" style="z-index: 9999;">
			<div class="background-block" style="background: red; filter: alpha(opacity=30); -moz-opacity: 0.3; opacity: 0.3; position: absolute; top: 0; left: 0; width: 100%;">
			</div>
			<div class="text-block" style="position: absolute; top: 0; left: 0; width: 100%; color: white; text-align: center;">

			</div>
		</div> -->
		<div class="info-wrapper" style="z-index: 3; position: absolute; top: 0; left: 0; display: flex; height: 100%; width: 100%; flex-flow: row; align-items: center;">

			<div class="col-lg-2 col-lg-offset-1 fotoblog-tekst" style="height: 50%; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; font-size: 2em;">
				<h1>{{$fotoblog->title}}</h1>
				@if(!empty($fotoblog->description))
					<hr style="width: 50%">
					<h3>{{$fotoblog->description}}</h3>
				@endif
			</div>

			<div class="col-lg-2 col-lg-offset-6 fotoblog-date" style="height: 75%;">
				<div class="info-background"></div>
				<div class="date-info-wrapper">
					<h1>{{date('d F', strtotime($fotoblog->created_at))}}</h1>
					<h3 style="font-weight: bold;">{{date('Y', strtotime($fotoblog->created_at))}}</h3>
				</div>
			</div>

		</div>

		<div class="img-wrapper" style="z-index: 2; display: flex; justify-content: center; height: 100%; width: 100%;">
			<img class="col-lg-8 center-block fotoblog img-responsive" src="/uploads/{{$fotoblog->image}}" alt="{{$fotoblog->title}}">
		</div>

	</div>
	@endforeach
@endsection
