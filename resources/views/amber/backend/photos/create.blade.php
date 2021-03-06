@extends('layout')
@section('content')
@include('amber.resources.menu')
  @include('amber.resources.photos-submenu')
  <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
      <h1> New Fotoblog entry </h1>
      <form method="POST" action="{{URL::to('/Amber/photos')}}" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name-input">Titel</label>
          <input type="text" class="form-control" name="title" id="title-input" placeholder="Titel">
          <label for="name-input">Description</label>
          <input type="text" class="form-control" name="description" id="description-input" placeholder="Description">
          <label for="name-input">Image</label>
          <input type="file" name='image' id='file'>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        </div>
        <button type="submit" class="btn btn-lg">Save</button>
      </form>
  </div>
@endsection
