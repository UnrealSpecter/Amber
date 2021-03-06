@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/photos/style.css')}}"/>
@endsection
@section('js')
	<script src="{{ URL::asset('js/global/hammer.js') }}"></script>
		<script src="{{ URL::asset('js/global/hammer-time.js') }}"></script>
    <!-- <script src="{{ URL::asset('plugins/viewportchecker/js/viewport.js') }}"></script>
    <script src="{{ URL::asset('plugins/viewportchecker/js/viewportchecker.js') }}"></script> -->
	<script src="{{ URL::asset('js/photos/script.js') }}"></script>
@endsection
@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
	@foreach ($fotoblogs as $fotoblog)
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 photo-wrapper hidden">

		<div class="info-wrapper">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 fotoblog-tekst hidden" style="height: 50%;">
				<div class="info-background"></div>
				<h1>{{$fotoblog->title}}</h1>
				@if(!empty($fotoblog->description))
					<hr style="width: 75%">
					<h3>{{$fotoblog->description}}</h3>
				@endif
			</div>
<!--
			<div class="col-lg-2 col-lg-offset-5 col-md-4 col-md-offset-3 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 fotoblog-date hidden">
				<div class="info-background"></div>
				<div class="date-info-wrapper">
					<h1>{{date('d F', strtotime($fotoblog->created_at))}}</h1>
					<h3 style="font-weight: bold;">{{date('Y', strtotime($fotoblog->created_at))}}</h3>
				</div>
			</div> -->
		</div>

		<div class="img-wrapper">
			<img class="col-lg-8 col-md-9 col-sm-12 col-xs-12 center-block fotoblog img-responsive" id="photo-{{ $fotoblog->id }}" data-tapped="0" src="/uploads/{{$fotoblog->image}}" alt="{{$fotoblog->title}}">
		</div>

	</div>
	@endforeach
@endsection
