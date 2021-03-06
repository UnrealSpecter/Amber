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
@include('amber.resources.menu')
@include('amber.resources.agenda-fragments-submenu')
<div class="agenda-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex; justify-content: center; height: 100vh;">

	<div class="flipbook-viewport">
		<div class="container">
			<div class="flipbook">
				@foreach($agendafragments as $agendafragment)
					<div style="background-image:url('/uploads/agendafragments/{{$agendafragment->imagepath}}')">
						<a href="{{Request::url()}}/{{$agendafragment->id}}/edit" class="btn btn-default btn-lg" style="float: left;">
							<span class="glyphicon glyphicon-pencil"></span> Edit
						</a>
						<form method="POST" action="{{URL::to('/Amber/agendafragments')}}/{{$agendafragment->id}}" enctype="multipart/form-data">
				        	<input type="hidden" name="_method" value="DELETE">
				        	<input type="hidden" name="_token" value="{{csrf_token()}}">
				        	<button type="submit" class="btn btn-default btn-lg">
				        		<span class="glyphicon glyphicon-remove"></span> Delete
				        	</button>
				        </form>
					</div>
				@endforeach
				<!-- <div style="background-image:url(https://pbs.twimg.com/media/CQyQbkiUcAEhoQl.jpg)"></div>
				<div style="background-image:url(http://i3.kym-cdn.com/photos/images/newsfeed/000/925/494/218.png_large)"></div>
				<div style="background-image:url(https://i.ytimg.com/vi/pDgM1ug0wVQ/maxresdefault.jpg)"></div>
				<div style="background-image:url(http://p2.i.ntere.st/0fa87ebd7b66b5f7aa6baa24b6fdacb5_480.jpg)"></div>
				<div style="background-image:url(https://i.gyazo.com/88d02d711b1be8733bcb52d5050c5457.png)"></div>
				<div style="background-image:url(http://files.gamebanana.com/img/ico/sprays/57822c19e1ad1.png)"></div>
				<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/28087/3.0)"></div>
				<div style="background-image:url(http://cdn.i.ntere.st/p/19449802/image)"></div>
				<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/4339/3.0)"></div>
				<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/55338/3.0)"></div>
				<div style="background-image:url(https://static-cdn.jtvnw.net/emoticons/v1/93064/3.0)"></div>
				<div style="background-image:url(http://static.tumblr.com/b6e1cf0f096282785050ff2f77e49d6a/smihjlx/FHgmwwb2u/tumblr_static_kappa.gif)"></div> -->

			</div>
		</div>
	</div>

</div>

</script>

@endsection
