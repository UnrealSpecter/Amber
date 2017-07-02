@section('css')
	<link rel="stylesheet" href="{{ URL::asset('plugins/justified-gallery/css/justifiedGallery.min.css')}}" />
	<link rel="stylesheet" href="{{ URL::asset('css/works/style.css')}}"/>
@endsection
@section('js')
	<script src="https://code.jquery.com/jquery-2.1.0.min.js" integrity="sha256-8oQ1OnzE2X9v4gpRVRMb1DWHoPHJilbur1LP9ykQ9H0=" crossorigin="anonymous"></script>
	<script src="{{ URL::asset('plugins/justified-gallery/js/jquery.justifiedGallery.min.js') }}"></script>
	<script src="{{ URL::asset('js/works/script.js') }}"></script>
@endsection
@extends('layout')
@section('content')
@include('amber.resources.menu')
@include('amber.resources.works-submenu')
	<div class="col-lg-10 col-lg-offset-1" style="margin-top: 20px;">
		<div id="works-backend-gallery" class="justified-gallery">
			@foreach($works as $work)
				<a class="work animated slideInLeft hidden" href="/uploads/works/{{$work->imagepath}}">
					<div style="padding-right: 15px; position: absolute; height: 50px; width: 100%; right: 0; z-index: 100">
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
					<img src="/uploads/works/thumbs/{{$work->imagepath}}"/>
					<div class="caption animated fadeInUp">
						<div>{{$work->title}}</div>
						@if($work->dimensions)
						<div>{{$work->dimensions}}</div>
						@endif
						<div>{{$work->workDate}}</div>
					</div>
				</a>
			@endforeach
		</div>
	</div>
@endsection
