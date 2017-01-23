@extends('layout')
@include('amber.resources.menu')
@section('content')
	<h1> Edit Performance entry </h1>
	<form method="POST" action="{{URL::to('/Amber/performances')}}/{{$performance->id}}" enctype="multipart/form-data">
		<div class="form-group">
		  <label for="name-input">Titel</label>
		  <input type="text" class="form-control" name="name" id="title-input" placeholder="Titel" value="{{$performance->name}}">
		  <label for="name-input">Description</label>
		  <input type="text" class="form-control" name="description" id="description-input" placeholder="Description" value="{{$performance->description}}">
		  <img src="/uploads/{{$performance->mediaItem}}"/>
		  <input type="file" name='mediaItem' id='file'>

          <label class="control-label" for="date">Datum van optreden</label>
          <input class="form-control" id="date" name="performanceDate" placeholder="YYYY-MM-DD" type="text"/>

		  <input type="hidden" name="_method" value="PUT">
		  <input type="hidden" name="_token" value="{{csrf_token()}}">
		</div>
		<button type="submit" class="btn btn-lg">Edit</button>
	</form>
@endsection
