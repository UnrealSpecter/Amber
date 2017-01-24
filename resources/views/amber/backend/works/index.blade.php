@extends('layout')
@include('amber.resources.menu')
@section('content')
	@include('amber.resources.works-submenu')
	<div id="mygallery" class="justified-gallery">
		@foreach($works as $work)
			<a href="/uploads/works/{{$work->imagepath}}">
				<img src="/uploads/works/{{$work->imagepath}}"/>
				<div class="caption">
					<div>{{$work->title}}</div>
					<div>{{$work->dimensions}}</div>
					<div>{{$work->date}}</div>
				</div>
			</a>
		@endforeach
	</div> -->
	<!-- <div id="mygallery" class="justified-gallery">
		@for ($i = 0; $i < 100; $i++)
			<a href="/uploads/18c.png">
				<img alt="caption for image 1" src="/uploads/18c.png"/>
			</a>
		@endfor
	</div> -->

@endsection