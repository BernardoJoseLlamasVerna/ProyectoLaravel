@extends('layout')

@section('contenido')
  <h1>Contactos</h1>
  <h2>Escríbeme</h2>

  <form method="post" action="{{route('mensajes.store')}}">
    {!! csrf_field() !!}
    <p><label for="nombre">
      Nombre
      <input class="form-control" type="text" name="nombre" value={{ old('nombre') }}>
      {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
    </label></p>
    <p><label for="email">
      Email
      <input class="form-control" type="email" name="email" value={{ old('email') }}>
      {!! $errors->first('email', '<span class=error>:message</span>') !!}
    </label></p>
    <p><label for="mensaje">
      Mensaje
      <textarea class="form-control" name="mensaje">{{old('mensaje')}}</textarea>
      {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
    </label></p>
    <p><input class="btn btn-primary" type="submit" value="Enviar"></p>
  </form>
  <hr>
@endsection
