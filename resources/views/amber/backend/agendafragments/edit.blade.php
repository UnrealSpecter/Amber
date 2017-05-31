@extends('layout')
@section('content')
@include('amber.resources.menu')
@include('amber.resources.agenda-fragments-submenu')
	<div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px; margin-bottom: 25px;">
		<h1> Edit Fragment entry </h1>
		<form method="POST" action="{{URL::to('/Amber/agendafragments')}}/{{ $agendafragment->id }}" enctype="multipart/form-data">
            <div class="form-group">
                <img class="img-responsive" src="/uploads/agendafragments/{{$agendafragment->imagepath }}"/>
                <input type="file" name='image' id='file'>
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
            <button type="submit" class="btn btn-lg">Edit</button>
		</form>
	</div>
@endsection
