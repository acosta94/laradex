@extends('layouts.app')
@section('title', 'Trainer')
@section('content')
<img style="height: 200px; width: 200px; background-color:#efefef; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}">
<div class="text-center">
<h5>{{$trainer->name}}</h5>
<p>{{$trainer->description}}</p>
</div>
@endsection
    