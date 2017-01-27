@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
	<div id="mygallery" class="justified-gallery">
		@foreach($works as $work)
			<a href="/uploads/works/{{$work->imagepath}}">
				<div style="position: absolute; height: 50px; width: 50px; right: 0; z-index: 100">
				</div>
				<img src="/uploads/works/{{$work->imagepath}}"/>
				<div class="caption">
					<div>{{$work->title}}</div>
					<div>{{$work->dimensions}}</div>
					<div>{{$work->workDate}}</div>
				</div>
			</a>
		@endforeach
	</div>
@endsection
