@extends('layout')
@include('amber.resources.menu')
@section('content')
@include('amber.resources.cv-submenu')
  @foreach ($categories as $category)
      <h1>{{$category->categoryName}}</h1>
      @foreach($category->entries as $entry)
        <div class="row">
            <div class="col-md-6">{{$entry->leftSide}}</div>
            <div class="col-md-6">
            {{$entry->rightSide}}
                <span class="pull-right">
                    {{ Form::open(['method' => 'DELETE', 'route' => array('CV.destroy', $entry->id), $entry->id])}}
                        {{ Form::button('<span class="glyphicon glyphicon-trash"</span>', ['type' => 'submit'])}}
                    {{ Form::close() }}
                </span>
                <span class="pull-right">
                    {{ Form::open(['method' => 'GET', 'route' => array('CV.edit', $entry->id), $entry->id])}}
                        {{ Form::button('<span class="glyphicon glyphicon-pencil"</span>', ['type' => 'submit'])}}
                    {{ Form::close() }}
                </span>
            </div>

        </div>
      @endforeach
  @endforeach

@endsection
