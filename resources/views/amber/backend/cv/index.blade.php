@extends('layout')
@section('content')
@include('amber.resources.menu')
@include('amber.resources.cv-submenu')
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
    @foreach ($categories as $category)
      <h1>{{$category->categoryName}}</h1>
      <a class="btn btn-small btn-info" href="{{ URL::to('Amber/CV/categories/' . $category->id . '/edit')}}">Edit</a>
      {{ Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id]])}}
        {{Form::hidden('id', $category->id)}}
        {{Form::submit('Delete', ['class' => 'btn', 'btn-danger'])}}
      {{ Form::close() }}
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
    </div>
@endsection
