@extends('layout')

@section('contenido')
  <h1>Mensaje de {{$message->nombre}}</h1>

  <form method="post" action="{{route('messages.update', $message->id)}}">
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <p><label for="nombre">
      Nombre
      <input type="text" name="nombre" value={{ $message->nombre }}>
      {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
    </label></p>
    <p><label for="email">
      Email
      <input type="email" name="email" value={{ $message->email }}>
      {!! $errors->first('email', '<span class=error>:message</span>') !!}
    </label></p>
    <p><label for="mensaje">
      Mensaje
      <textarea name="mensaje">{{ $message->mensaje }}</textarea>
      {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
    </label></p>
    <p><input type="submit" value="Enviar"></p>
  </form>
@endsection
