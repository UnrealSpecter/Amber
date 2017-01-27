@extends('layout')
@include('amber.resources.menu')
@section('content')
  @include('amber.resources.photos-submenu')
  @foreach ($fotoblogs as $fotoblog)
	<div class="container col-lg-12 ">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-10" style="border: solid 1px black">
				<div class="animated slideInLeft" style="position: absolute; top: 50%; height: 100px; border: solid black 1px; color: white;">
					<h1>{{$fotoblog->title}}</h1>
					<h2>{{$fotoblog->description}}</h2>
				</div>
				<img class="center-block fotoblog" style="width: 75%; height: 50%;" src="/uploads/{{$fotoblog->image}}" alt="{{$fotoblog->title}}">
				<!-- <h2>{{date('F d, Y', strtotime($fotoblog->created_at))}}</h2> -->
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div>
	<a href="{{Request::url()}}/{{$fotoblog->id}}/edit" class="btn btn-default btn-lg">
		<span class="glyphicon glyphicon-pencil"></span> Edit
	</a>
    <form method="POST" action="{{URL::to('/Amber/photos')}}/{{$fotoblog->id}}" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<button type="submit" class="btn btn-default btn-lg">
			<span class="glyphicon glyphicon-remove"></span> Delete
		</button>
    </form>
  @endforeach
@endsection

