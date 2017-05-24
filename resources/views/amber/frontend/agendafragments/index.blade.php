@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/agendafragments/style.css')}}"/>
@endsection
@section('js')
 
	<script src="{{ URL::asset('js/agendafragments/script.js') }}"></script>
@endsection
@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			@foreach($agendafragments as $agendafragment)
				<div style="background-image:url('/uploads/agendafragments/{{$agendafragment->imagepath}}')"></div>
			@endforeach
			<!-- <div style="background-image:url(https://pbs.twimg.com/media/CQyQbkiUcAEhoQl.jpg)"></div>
			<div class="kappa" style="background-image:url(http://i3.kym-cdn.com/photos/images/newsfeed/000/925/494/218.png_large)"></div>
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

<script type="text/javascript">
</script>

@endsection
