@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/agendafragments/basic.css')}}"/>
	<link rel="stylesheet" href="{{ URL::asset('css/agendafragments/style.css')}}"/>
@endsection
@section('js')

@endsection
@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
<div class="agenda-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex; justify-content: center; height: 85vh;">

	<div class="t">
	    <div class="tc rel">
	        <div class="book" id="book">
				@foreach($agendafragments as $agendafragment)
	            	<div class="page"><img src="/uploads/agendafragments/{{$agendafragment->imagepath}}" alt="" /></div>
				@endforeach
		   </div>
	    </div>
	</div>

	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs ducky-container" style="position: fixed; left: 0; bottom: 0; height: 100%; z-index: 10;" >
		<img class="duck-one img-responsive" style="position: absolute; bottom: 0; right: 0; z-index: 1;" src="{{ URL::asset('/images/Agenda/eendje_1.png')}}" alt="explainer duckling">
		<img class="duck-two img-responsive " style="position: absolute; bottom: 0; right: 0; z-index: 0;" src="{{ URL::asset('/images/Agenda/eendje_2.png')}}" alt="explainer duckling">
	</div>

</div>

<script src="{{ URL::asset('js/agendafragments/jquery.min.1.7.js') }}"></script>
<script src="{{ URL::asset('js/agendafragments/turn.min.js') }}"></script>
<script src="{{ URL::asset('js/agendafragments/script.js') }}"></script>

@endsection
