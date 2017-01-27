@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
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
