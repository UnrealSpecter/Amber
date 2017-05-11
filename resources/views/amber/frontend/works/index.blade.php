@section('css')
	<link rel="stylesheet" href="{{ URL::asset('plugins/justified-gallery/css/justifiedGallery.min.css')}}" />
	<link rel="stylesheet" href="{{ URL::asset('plugins/swipebox/css/swipebox.min.css')}}" />
	<link rel="stylesheet" href="{{ URL::asset('css/works/style.css')}}"/>
@endsection
@section('js')
	<script src="https://code.jquery.com/jquery-2.1.0.min.js" integrity="sha256-8oQ1OnzE2X9v4gpRVRMb1DWHoPHJilbur1LP9ykQ9H0=" crossorigin="anonymous"></script>
	<script src="{{ URL::asset('plugins/justified-gallery/js/jquery.justifiedGallery.min.js') }}"></script>
	<script src="{{ URL::asset('plugins/swipebox/js/jquery.swipebox.min.js')}}"></script>
	<script src="{{ URL::asset('js/works/script.js') }}"></script>
@endsection
@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
		<div class="col-lg-10 col-lg-offset-1">
			<div id="works-gallery" class="justified-gallery">
				@foreach($works as $work)
					<a class="work animated slideInLeft hidden swipebox" href="/uploads/works/{{$work->imagepath}}">
						<img src="/uploads/works/{{$work->imagepath}}"/>
						<div class="caption animated fadeInUp">
							<div>
								<h1 class="text-center">{{$work->title}}</h1>
							</div>
							<hr width="50%">
							<div>
								<h3 class="text-center">{{$work->dimensions}}</h3>
							</div>
							<div>
								<p style='font-style: italic; top: 10px; left: 10px; position: absolute;8'>{{$work->workDate}}</p>
							</div>
						</div>
					</a>
				@endforeach
			</div>
		</div>
@endsection
