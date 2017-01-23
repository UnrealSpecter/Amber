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
        <a class="navbar-brand" href="#">Performance Overview</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="{{Request::url()}}">Overview</a></li>
          <li><a href="/Amber/performances/create">Create</a></li>
          <li><a href="/Amber/performances/edit">Edit</a></li>
          <li><a href="/Amber/performances/delete">Delete</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  @foreach ($performances as $performance)
      <h1>{{$performance->name}}</h1>
      <h2>{{$performance->performanceDate}}</h2>
      <img src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}">
      <h2>{{date('F d, Y', strtotime($performance->created_at))}}</h2>
  @endforeach

@endsection
