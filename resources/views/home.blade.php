@extends('layouts.app')

@section('main')
  <div class="container-flex">
    @foreach ($comics as $comic)
      <div class="card">
        <div class="thumb-img">
          <img src="{{$comic['thumb']}}" alt="thumb-img">
        </div>
        <h4>{{$comic['series']}}</h4>
      </div>
    @endforeach
  </div>
@endsection
