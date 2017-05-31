@extends('layout')
@section('content')
@include('amber.resources.menu')
  @include('amber.resources.photos-submenu')
  <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
      <h1> New Agenda Fragment Entry </h1>
      <form method="POST" action="{{URL::to('/Amber/agendafragments')}}" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name-input">Image</label>
          <input type="file" name='imagepath' id='file'>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        </div>
        <button type="submit" class="btn btn-lg">Save</button>
      </form>
  </div>
@endsection
