@extends('layouts.app')

@section('main')
  <div class="container-flex thumb-img">
    <img src="{{$comic['thumb']}}" alt="thumb-img">
  </div>
  <h2 class="container-flex uppercase">{{$comic['title']}}</h2>
@endsection
