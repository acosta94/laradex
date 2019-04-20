@extends('layouts.app')
@section('title', 'Trainer')
@section('content')

    @include('common.success')
    <img style="height: 200px; width: 200px; background-color:#efefef; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}">
    <div class="text-center">
        <h5>{{$trainer->name}}</h5>
        <p>{{$trainer->description}}</p>
         <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
         <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        <modal-button></modal-button>
        <pokemons-create-form></pokemons-create-form>
        <pokemons-list></pokemons-list>
    </div>


@endsection
    