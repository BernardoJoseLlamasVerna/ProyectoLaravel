@extends('layout')

@section('contenido')
  <h1>Mensaje de {{$message->nombre}}</h1>

  <form method="post" action="{{route('mensajes.update', $message->id)}}">
    {!! method_field('PUT') !!}
    @include('messages.form', ['btnText'=>'Actualizar'])
  </form>
@endsection
