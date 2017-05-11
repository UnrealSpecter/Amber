@extends('layout')
@section('content')
@include('amber.resources.menu')
@include('amber.resources.performances-submenu')
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
        @foreach ($performances as $performance)
          <h1>{{$performance->name}}</h1>
          <h1>{{$performance->description}}</h1>
          <h2>{{$performance->performanceDate}}</h2>
          <img class="center-block img-responsive" src="/uploads/{{$performance->mediaItem}}" alt="{{$performance->name}}">
          <h2>{{date('F d, Y', strtotime($performance->created_at))}}</h2>
          <a href="{{Request::url()}}/{{$performance->id}}/edit" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-pencil"></span> Edit
          </a>
          <form method="POST" action="{{URL::to('/Amber/performances')}}/{{$performance->id}}" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <button type="submit" class="btn btn-default btn-lg">
                  <span class="glyphicon glyphicon-remove"></span> Delete
              </button>
          </form>
          <hr>
        @endforeach
    </div>
@endsection
