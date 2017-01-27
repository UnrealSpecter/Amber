@extends('layout')
@section('content')
@include('amber.resources.frontend-menu')
  @foreach ($categories as $category)
    <!-- alterate slide category name in from left and right -->
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-1">
        @if ($category->id % 2 == 0)
        <h1 class="animated fadeInLeft" style="font-weight: bold; color: #3399ff;">{{$category->categoryName}}</h1>
        @else
        <h1 class="animated fadeInLeft" style="font-weight: bold; color:#3399ff;">{{$category->categoryName}}</h1>
        @endif
      </div> 
      <div class="col-lg-7"></div>
    </div>

    @foreach($category->entries as $entry)
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
          <h3 class="animated fadeInLeft" style="color: white;">{{$entry->leftSide}}<h3>
          <!-- <hr class="animated fadeInLeft" style="float: left; width: 20%"> -->
        </div>
        <div class="col-lg-8">
          <h3 class="animated fadeInRight" style="color: white; font-style: italic;">{{$entry->rightSide}}</h3>
          <hr class="animated fadeInRight" style="width: 100%">
        </div>
    </div>
    
    @endforeach

  @endforeach
@endsection
