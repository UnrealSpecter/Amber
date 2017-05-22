@extends('layout')
@section('content')
@include('amber.resources.menu')
@include('amber.resources.performances-submenu')
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
		<h1> Edit Performance entry </h1>
		<form method="POST" action="{{URL::to('/Amber/performances')}}/{{$performance->id}}" enctype="multipart/form-data">
			<div class="form-group">
			  <label for="name-input">Titel</label>
			  <input type="text" class="form-control" name="name" id="title-input" placeholder="Titel" value="{{$performance->name}}">
			  <label for="name-input">Description</label>
			  <input type="text" class="form-control" name="description" id="description-input" placeholder="Description" value="{{$performance->description}}">
              <label for="name-input">Video</label>
              <input class="form-control" name="video" type="text" value="{{ $performance->video }}" placeholder="Performance youtube url">
              <img class="img-responsive" src="/uploads/{{$performance->mediaItem}}"/>
			  <input type="file" name='mediaItem' id='file'>

	          <label class="control-label" for="date">Datum van optreden</label>
	          <input class="form-control" id="date" name="performanceDate" placeholder="YYYY-MM-DD" value="{{ $performance->performanceDate }}" type="text"/>

			  <input type="hidden" name="_method" value="PUT">
			  <input type="hidden" name="_token" value="{{csrf_token()}}">
			</div>
			<button type="submit" class="btn btn-lg">Edit</button>
		</form>
	</div>
@endsection
