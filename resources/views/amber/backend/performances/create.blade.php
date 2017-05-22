@extends('layout')
@section('content')
@include('amber.resources.menu')
@include('amber.resources.performances-submenu')
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
        <h1> New Theatre entry </h1>
        <form method="POST" action="{{URL::to('/Amber/performances')}}" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name-input">Naam</label>
            <input type="text" class="form-control" name="name" id="title-input" placeholder="Titel">
            <label for="name-input">Omschrijving</label>
            <input type="text" class="form-control" name="description" id="description-input" placeholder="Description">
            <label for="name-input">Video</label>
            <input class="form-control" name="video" type="text" placeholder="Performance youtube url">
            <label for="name-input">Image</label>
            <input type="file" name='mediaItem' id='file'>
            <label class="control-label" for="date">Datum van optreden</label>
            <input class="form-control" id="date" name="performanceDate" placeholder="YYYY-MM-DD" type="text"/>

            <input type="hidden" name="_token" value="{{csrf_token()}}">
          </div>
          <button type="submit" class="btn btn-lg">Save</button>
        </form>
    </div>
@endsection
