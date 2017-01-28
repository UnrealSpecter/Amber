@extends('layout')
@include('amber.resources.menu')
@section('content')
	<h1> Edit Category </h1>
	<form method="POST" action="{{URL::to('/Amber/CV/categories')}}/{{$category->id}}" enctype="multipart/form-data">
		<div class="form-group">
		  <label for="name-input">Categorie naam</label>
		  <input type="text" class="form-control" name="categoryName" id="title-input" placeholder="Titel" value="{{$category->categoryName}}">
		  <input type="hidden" name="_method" value="PUT">
		  <input type="hidden" name="_token" value="{{csrf_token()}}">
		</div>
		<button type="submit" class="btn btn-lg">Edit</button>
	</form>
@endsection
