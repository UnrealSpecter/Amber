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
        <a class="navbar-brand" href="#">Curriculum Vitae</a>
    </div>
  </nav>

  @foreach ($categories as $category)
      <h1>{{$category->categoryName}}</h1>
      @foreach($category->entries as $entry)
        <div class="row">
            <div class="col-md-6">{{$entry->leftSide}}</div>
            <div class="col-md-6">
                <span class="pull-right">
                    {{$entry->rightSide}}
                    {{ Form::open(['method' => 'DELETE', 'route' => array('CV.destroy', $entry->id), $entry->id])}}
                        {{ Form::button('<span class="glyphicon glyphicon-trash"</span>', ['type' => 'submit'])}}
                    {{ Form::close() }}
                </span>
            </div>

        </div>
      @endforeach
  @endforeach

@endsection
