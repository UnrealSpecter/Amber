@extends('layout')
@include('amber.resources.menu')
@section('content')
  @include('amber.resources.photos-submenu')
  @foreach ($fotoblogs as $fotoblog)
	<h1>{{$fotoblog->title}}</h1>
	<h2>{{$fotoblog->description}}</h2>
	<img src="/uploads/{{$fotoblog->image}}" alt="{{$fotoblog->title}}">
	<h2>{{date('F d, Y', strtotime($fotoblog->created_at))}}</h2>
	<a href="{{Request::url()}}/{{$fotoblog->id}}/edit" class="btn btn-default btn-lg">
		<span class="glyphicon glyphicon-pencil"></span> Edit
	</a>
    <form method="POST" action="{{URL::to('/Amber/dashboard/photos')}}/{{$fotoblog->id}}" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<button type="submit" class="btn btn-default btn-lg">
			<span class="glyphicon glyphicon-remove"></span> Delete
		</button>
    </form>
  @endforeach
@endsection