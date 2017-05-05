@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/cv/style.css')}}"/>
@endsection
@section('js')
	<script src="{{ URL::asset('js/cv/script.js') }}"></script>
@endsection
@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
	<div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-sm-12 col-sm-offset-12 col-xs-12 col-xs-offset-2" style="display: flex; align-items: center; flex-flow: column wrap;">
		@foreach ($categories as $category)
			<!-- alterate slide category name in from left and right -->
			<div class="col-lg-12 col-md-12 col-sm-12 category hidden">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					@if ($category->id % 2 == 0)
					<h1 class="animated fadeInRightBig text-left" style="font-weight: bold; color:#77aaff;">{{$category->categoryName}}</h1>
					@else
					<h1 class="animated fadeInRightBig text-left" style="font-weight: bold; color:#77aaff;">{{$category->categoryName}}</h1>
					@endif
				</div>
			</div>
			@foreach($category->entries as $entry)
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 category hidden">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<h3 class="animated fadeInLeft text-left" style="color: white;">{{$entry->leftSide}}</h3>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
						<h3 class="animated fadeInRight text-left" style="color: white; font-style: italic;">{{$entry->rightSide}}</h3>
					</div>
				</div>
			@endforeach
		@endforeach
	</div>
@endsection
