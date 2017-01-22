@extends('layout')

@section('content')
	@foreach($champions as $champion)
		<li>
			<a href="/all-in/{{ $champion->id }}">{{ $champion->name }}</a> 
		</li>
	@endforeach
	<a href="addChampion"> 
		<button type="button" class="btn btn-lg">Add New Champion</button>
	</a>
@endsection