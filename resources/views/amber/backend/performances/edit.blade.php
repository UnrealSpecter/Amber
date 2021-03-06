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
              <textarea name="description" id="description-input" class="form-control" rows="4" cols="50" placeholder="Description">{{$performance->description}}</textarea>
              <label for="name-input">Video</label>
              @if($performance->video)
              <input class="form-control" name="video" type="text" value="https://www.youtube.com/watch?v={{ $performance->video }}" placeholder="Performance youtube url">
              @else
              <input class="form-control" name="video" type="text" value="" placeholder="Performance youtube url">
              @endif
              <img class="img-responsive" src="/uploads/{{$performance->mediaItem}}"/>
			  <input type="file" name='mediaItem' id='file'>

	          <label class="control-label" for="date">Datum van optreden</label>
	          <input class="form-control" id="date" name="performanceDate" placeholder="YYYY-MM-DD" value="{{ $performance->performanceDate }}" type="text"/>

              <label class="control-label" for="show_date">Datum laten zien?</label>
              @if($performance->show_date == 'yes')
              <input type="radio" name="show_date" value="yes" checked>Ja
              <input type="radio" name="show_date" value="no">Nee<br>
              @else
              <input type="radio" name="show_date" value="yes">Ja
              <input type="radio" name="show_date" value="no" checked>Nee<br>
              @endif


			  <input type="hidden" name="_method" value="PUT">
			  <input type="hidden" name="_token" value="{{csrf_token()}}">
			</div>
			<button type="submit" class="btn btn-lg">Edit</button>
		</form>
	</div>
@endsection
