@extends('layout')
@include('amber.resources.menu')
@section('content')
@include('amber.resources.agenda-fragments-submenu')
<h1> New Agenda Fragment Entry </h1>
  <form method="POST" action="{{URL::to('/Amber/agendafragments')}}" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name-input">Image</label>
      <input type="file" name='imagepath' id='file'>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
    </div>
    <button type="submit" class="btn btn-lg">Save</button>
  </form>
@endsection
