@extends('layouts.app')

@section('content')

<div class="container">

  <!-- <form action="{{action('SitioController@guardarComentario')}}" method="POST"> -->
  <form action="{{route('contacto-guardar')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" name="correo" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection