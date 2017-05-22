@section('css')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home/style.css') }}">
@endsection
@section('js')
@endsection
@extends('layout')
@section('content')
	@include('amber.resources.frontend-menu')
	<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			<img class="animated fadeInUp" style="max-height: 100%; width: 100%;" src="/uploads/header.jpg" alt="amber-titelblad">
		</div>
		<div class="row">
			<img class="animated fadeInUp img-responsive col-lg-10 col-lg-offset-1" src="{{ URL::asset('/images/home/biografie.jpeg')}}" alt="amber-titelblad">
		</div>
		<div class="row social-media">
			<div class="col-lg-4">
				<p>amberrozema@gmail.com</p>
			</div>
			<div class="col-lg-4 social-media-icons">
				<a target="_blank" href="http://www.facebook.com/amberrozema" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="{{ URL::asset('/images/home/facebook.svg') }}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive">
				</a>
				<a target="_blank" href="http://www.amberrozema.tumblr.com" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="{{ URL::asset('/images/home/tumblr.svg') }}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive">
				</a>
				<a target="_blank" href="https://www.instagram.com/ambernynkeanna/" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="{{ URL::asset('/images/home/instagram.svg') }}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive">
				</a>
				<a target="_blank" href="https://m.youtube.com/channel/UCRvB5HXlJcjmhM2ckm_S5Tg" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="{{ URL::asset('/images/home/youtube.svg') }}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive">
				</a>
			</div>
			<div class="col-lg-4">
				<p>+31(0)625274361</p>
			</div>
		</div>
	</div>
@endsection
