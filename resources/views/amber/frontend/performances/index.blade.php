@extends('layout')
@section('content')
  @foreach ($performances as $performance)
      <h1>{{$performance->name}}</h1>
      <h1>{{$performance->description}}</h1>
      <h2>{{$performance->performanceDate}}</h2>
      <img src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}">
      <h2>{{date('F d, Y', strtotime($performance->created_at))}}</h2>
      <hr>
  @endforeach
@endsection
