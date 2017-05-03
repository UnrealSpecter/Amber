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
	<div class="container col-lg-12 ">
		<div class="row">
			<div class="col-lg-12" style="">
				<!-- <div class="fotoblog-tekst animated slideInLeft" style="position: absolute; top: 30%; height: 100px; rgba(255,0,0,0.4); /*border: solid black 1px;*/ color: white; z-index: 9999;">
				</div> -->

				<div class="photo-tekst-container fotoblog-tekst" style="position: absolute; top: 30%; width: 300px; z-index: 9999;">
					<div class="background-block" style="background: red; filter: alpha(opacity=30); -moz-opacity: 0.3; opacity: 0.3; position: absolute; top: 0; left: 0; width: 100%;">
					</div>

					<div class="text-block" style="position: absolute; top: 0; left: 0; width: 100%; color: white; text-align: center;">
						<h1>{{$fotoblog->title}}</h1>
						@if(!empty($fotoblog->description))
							<hr style="width: 50%">
							<h3>{{$fotoblog->description}}</h3>
						@endif
					</div>

				</div>
				<img class="center-block fotoblog img-responsive" style="width: 75%; height: 50%;" src="/uploads/{{$fotoblog->image}}" alt="{{$fotoblog->title}}">
				<!-- <p class="text-center">{{date('d F, Y', strtotime($fotoblog->created_at))}}</p> -->

				<div class="photo-tekst-container fotoblog-date" style="position: absolute; top: 30%; right: 0%; width: 200px; height: 200px; z-index: 9999;">
					<div class="background-block" style="background: red; filter: alpha(opacity=30); -moz-opacity: 0.3; opacity: 0.3; position: absolute; top: 0; left: 0; height: inherit; width: 100%;">
					</div>
					<div class="text-block" style="position: absolute; top: 0; left: 0; width: 100%; height: inherit; color: white; text-align: center;">
						<h3 class="text-center">{{date('d F', strtotime($fotoblog->created_at))}}</p>
						<hr style="width: 50%">
						<h1 class="text-center" style="font-weight: bold;">{{date('Y', strtotime($fotoblog->created_at))}}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" style="height: 150px;">
			</div>
		</div>
	</div>
  @endforeach
@endsection
