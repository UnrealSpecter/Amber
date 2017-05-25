@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/agendafragments/basic.css')}}"/>
	<link rel="stylesheet" href="{{ URL::asset('css/agendafragments/style.css')}}"/>
@endsection
@section('js')
	<script src="{{ URL::asset('js/agendafragments/jquery.min.1.7.js') }}"></script>
	<script src="{{ URL::asset('js/agendafragments/modernizr.2.5.3.min.js') }}"></script>
	<script src="{{ URL::asset('js/agendafragments/basic.js') }}"></script>
	<script src="{{ URL::asset('js/agendafragments/script.js') }}"></script>
@endsection
@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
<div class="agenda-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex; justify-content: center; height: 100vh;">

	<div class="flipbook-viewport">
		<div class="container">
			<div class="flipbook">
				@foreach($agendafragments as $agendafragment)
					<div style="background-image:url('/uploads/agendafragments/{{$agendafragment->imagepath}}')"></div>
				@endforeach
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs ducky-container" style="position: fixed; right: 0; bottom: 0; height: 100%; z-index: 10;" >
		<img class="duck-one img-responsive" style="position: absolute; bottom: 0; right: 0; z-index: 1;" src="{{ URL::asset('/images/home/eendje_1.png')}}" alt="explainer duckling">
		<img class="duck-two img-responsive " style="position: absolute; bottom: 0; right: 0; z-index: 0;" src="{{ URL::asset('/images/home/eendje_2.png')}}" alt="explainer duckling">
	</div>

</div>

@endsection
