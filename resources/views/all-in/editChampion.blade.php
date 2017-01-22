@extends('layout')

@section('content')
	<h1> {{ $champion->name }}</h1>
	<form method="POST" action="/all-in/edit">
		<div class="form-group">
			<label for="name-input">Name</label>
			<input type="text" class="form-control" name="name" id="name-input" placeholder="Name" value="{{ $champion->name }}">
			<input type="hidden" name="id" class="form-control" id="name-input" value="{{ $champion->id }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</div>
		<button type="submit" class="btn btn-lg">Save</button>
	</form>
@endsection