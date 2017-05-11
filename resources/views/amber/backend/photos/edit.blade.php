@extends('layout')
@section('content')
@include('amber.resources.menu')
@include('amber.resources.photos-submenu')
	<div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px; margin-bottom: 25px;">
		<h1> Edit Fotoblog entry </h1>
		<form method="POST" action="{{URL::to('/Amber/photos')}}/{{$fotoblog->id}}" enctype="multipart/form-data">
			<div class="form-group">
			  <label for="name-input">Titel</label>
			  <input type="text" class="form-control" name="title" id="title-input" placeholder="Titel" value="{{$fotoblog->title}}">
			  <label for="name-input">Description</label>
			  <input type="text" class="form-control" name="description" id="description-input" placeholder="Description" value="{{$fotoblog->description}}">
			  <img class="img-responsive" src="/uploads/{{$fotoblog->image}}"/>
			  <input type="file" name='image' id='file'>
			  <input type="hidden" name="_method" value="PUT">
			  <input type="hidden" name="_token" value="{{csrf_token()}}">
			</div>
			<button type="submit" class="btn btn-lg">Edit</button>
		</form>
	</div>
@endsection
