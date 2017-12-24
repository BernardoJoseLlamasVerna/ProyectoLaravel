@extends('layout')

@section('contenido')
  <h1>Login</h1>
  {{--Formulario de acceso a modo usuario o administrador--}}
  <form action="/login" method="post">
    {!! csrf_field() !!}
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Entrar">
  </form>
  <hr>
@endsection
