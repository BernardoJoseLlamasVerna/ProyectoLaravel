@extends('layout')

@section('contenido')
  <h1>Crear nuevo usuario</h1>

  <form method="post" action="{{route('usuarios.store')}}">
    @include('users.form', ['user' => new App\User])

    <p><input class="btn btn-primary" type="submit" value="Guardar"></p>
  </form>
@endsection
