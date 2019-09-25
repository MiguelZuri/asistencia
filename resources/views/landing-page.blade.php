@extends('layouts.app')

@section('content')

<div class="container">

<div class="card" style="width: 18rem;">
  <div class="card-header">
    <h1>HOLA</h1>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$nombre}}</li>
    <li class="list-group-item">{{$apellido ?? 'NO INDICO APELLIDO'}}</li>
  </ul>
</div>

<div class="jumbotron">
  <h1 class="display-4">{{$nombre}}</h1>
  <p class="lead">{{$apellido ?? 'NO INDICO APELLIDO'}}</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

</div>

@endsection