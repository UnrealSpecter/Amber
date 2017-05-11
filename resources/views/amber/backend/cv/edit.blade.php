@extends('layout')
@section('content')
@include('amber.resources.menu')
@include('amber.resources.cv-submenu')
	<div class="col-lg-8 col-lg-offset-2" style="margin-top: 25px;">
		<h1> Edit Performance entry </h1>
		<form method="POST" action="{{URL::to('/Amber/CV')}}/{{$cvEntry->id}}" enctype="multipart/form-data">
			<div class="form-group">
			  <label for="name-input">Linkerkant</label>
			  <input type="text" class="form-control" name="leftSide" id="title-input" placeholder="Titel" value="{{$cvEntry->leftSide}}">
			  <label for="name-input">Rechterkant</label>
			  <input type="text" class="form-control" name="rightSide" id="description-input" placeholder="Description" value="{{$cvEntry->rightSide}}">
			  <label for="name-input">Categorie</label>
		      <select class="form-control" name="category_id">
		          @foreach($categories as $category)
		            <option value={{$category->id}} {{$cvEntry->category_id == $category->id ? 'selected="selected"' : ''}}>{{$category->categoryName}}</option>
		          @endforeach
		      </select>

			  <input type="hidden" name="_method" value="PUT">
			  <input type="hidden" name="_token" value="{{csrf_token()}}">
			</div>
			<button type="submit" class="btn btn-lg">Edit</button>
		</form>
	</div>
@endsection
