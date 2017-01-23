@extends('layout')
@include('amber.resources.menu')
@section('content')
	@include('amber.resources.photos-submenu')
	<h1> Edit Fotoblog entry </h1>
	<form method="POST" action="{{URL::to('/Amber/dashboard/photos')}}/{{$fotoblog->id}}" enctype="multipart/form-data">
		<div class="form-group">
		  <label for="name-input">Titel</label>
		  <input type="text" class="form-control" name="title" id="title-input" placeholder="Titel" value="{{$fotoblog->title}}">
		  <label for="name-input">Description</label>
		  <input type="text" class="form-control" name="description" id="description-input" placeholder="Description" value="{{$fotoblog->description}}">
		  <img src="/uploads/{{$fotoblog->image}}"/>
		  <input type="file" name='image' id='file'>
		  <input type="hidden" name="_method" value="PUT">
		  <input type="hidden" name="_token" value="{{csrf_token()}}">
		</div>
		<button type="submit" class="btn btn-lg">Edit</button>
	</form>
@endsection

	