@extends('layout')

@section('content')
  <h1> Create New - Champion </h1>
  <form method="POST" action="/all-in/save">
    <div class="form-group">
      <label for="name-input">Name</label>
      <input type="text" class="form-control" name="name" id="name-input" placeholder="Name">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
    <button type="submit" class="btn btn-lg">Save</button>
  </form>
@endsection