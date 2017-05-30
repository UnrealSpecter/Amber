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
			<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12" style="display: flex; align-items: center; justify-content: center; font-family: Georgia; color: white; font-size: 2em;">
				Amber Nynke Anna Rozema (born 16th of December, 1997) is a visual artist, theatrical performer and storyteller from the Netherlands. Currently based in Maastricht where she studies at the Maastricht Academy of Performing Arts (Toneelacademie Maastricht). Mainly occupying herself with theatre. Alongside acting, performing and directing, she has also developed her drawing, painting, writing, photography and music composing skills. In her work, Amber combines all the formerly mentioned disciplines, since the stage is a place where they all come together.
			</div>
		</div>
		<div class="row">
			<img class="animated fadeInUp img-responsive col-lg-8 col-lg-offset-2" style="margin-bottom: 75px; margin-top: 75px;" src="{{ URL::asset('/images/Home/biografie.jpeg')}}" alt="amber-titelblad">
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12" style="display: flex; align-items: center; justify-content: center; font-family: Georgia; color: white; font-size: 2em;">
				Amber’s art works and photographs are for sale. These can be found on Amber’s Etsy account (The link can be found in the menu above). Besides, Amber can be hired for acting jobs, theatrical performances, spoken word performances, as a theatre maker and director of theatre projects. Also,  she makes photography portraits and other visual art jobs on-demand. Amber can be contacted by email and telephone (contact details below).
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12" style="margin-top: 50px; font-weight: bold; text-align: justify; display: flex; align-items: center; justify-content: center; font-family: Georgia; color: white; font-size: 3em;">
				"Always remember that the reason that you initially started working was that there was something inside yourself that you felt, that if you could manifest it in some way, you would understand more about yourself and how you coexist with the rest of society.”
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12" style="margin-top: 50px; display: flex; align-items: center; justify-content: center; font-family: Georgia; color: white; font-size: 2em;">
				David Bowie, 1997: Bowie’s Advice to Artists
			</div>
		</div>

		<div class="row social-media" style="margin-top: 50px;">
			<div class="col-lg-4">
				<p>amberrozema@gmail.com</p>
			</div>
			<div class="col-lg-4 social-media-icons">
				<a target="_blank" href="https://www.facebook.com/AmberRozemaArt/" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="{{ URL::asset('/images/Home/facebook.svg') }}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive">
				</a>
				<a target="_blank" href="http://www.amberrozema.tumblr.com" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="{{ URL::asset('/images/Home/tumblr.svg') }}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive">
				</a>
				<a target="_blank" href="https://www.instagram.com/ambernynkeanna/" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="{{ URL::asset('/images/Home/instagram.svg') }}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive">
				</a>
				<a target="_blank" href="https://m.youtube.com/channel/UCRvB5HXlJcjmhM2ckm_S5Tg" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<img src="{{ URL::asset('/images/Home/youtube.svg') }}" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive">
				</a>
			</div>
			<div class="col-lg-4">
				<p>+31(0)625274361</p>
			</div>
			<div class="col-lg-12" style="display: flex; align-items: center; height: 75px; justify-content: center; margin-top: 50px;">
				<a class="dhevak-link" target="_blank" href="http://dhevak.nl">WEBSITE BY DHEVAK</a>
			</div>
		</div>
	</div>
@endsection
