@extends('layout')
@section('content')
@include('amber.resources.menu')
@include('amber.resources.works-submenu')
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
      <h1> New Works entry </h1>
      <form method="POST" action="{{URL::to('/Amber/works')}}/{{$work->id}}" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name-input">Title</label>
          <input type="text" class="form-control" name="title" id="title-input" placeholder="Typ a title for the image" value="{{$work->title}}"/>
          <label for="name-input">Dimensions</label>
          <input type="text" class="form-control" name="dimensions" id="dimensions-input" placeholder="Typ the dimensions for the image" value="{{$work->dimensions}}" />
          <label class="control-label" for="date">Jaartal</label>
          <input class="form-control" id="date" name="workDate" placeholder="YYYY-MM-DD" type="text" value="{{$work->workDate}}"/>
          <!--TODO imagepath should be imagePath in migration en everywhere fucking else-->
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        </div>
        <button type="submit" class="btn btn-lg">Save</button>
      </form>
    </div>
@endsection
