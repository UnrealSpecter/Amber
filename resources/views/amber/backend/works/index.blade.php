@extends('layout')
@include('amber.resources.menu')
@section('content')
	@include('amber.resources.works-submenu')
	<div id="mygallery" class="justified-gallery">
		@foreach($works as $work)
			<a href="/uploads/works/{{$work->imagepath}}">
				<div style="position: absolute; height: 50px; width: 50px; right: 0; z-index: 100">
					<form method="GET" action="{{URL::to('/Amber/works')}}/{{$work->id}}/edit" enctype="multipart/form-data">
						<button type="submit" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-pencil"></span> Edit
						</button>
					</form>
					<form method="POST" action="{{URL::to('/Amber/works')}}/{{$work->id}}" enctype="multipart/form-data">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<button type="submit" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-remove"></span> Delete
						</button>
					</form>
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
