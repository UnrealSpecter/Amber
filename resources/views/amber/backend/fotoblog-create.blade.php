@extends('layout')

@include('amber.resources.menu')

@section('content')
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Fotoblog Overview</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/Amber/dashboard/fotoblog-overview">Overview</a></li>
          <li class="active"><a href="/Amber/dashboard/fotoblog-create">Create</a></li>
          <li><a href="/Amber/dashboard/fotoblog-edit">Edit</a></li>
          <li><a href="/Amber/dashboard/fotoblog-delete">Delete</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <h1> New Fotoblog entry </h1>
  <form method="POST" action="{{URL::to('/Amber/dashboard/fotoblog-save')}}" enctype="multipart/form-data">
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

@endsection