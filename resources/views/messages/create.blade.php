@extends('layout')

@section('contenido')
  <h1>Contactos</h1>
  <h2>Escríbeme</h2>

  <form method="post" action="{{route('mensajes.store')}}">
    {{--le pasamos una instancia de Message en blanco al formulario de crear para que
    no de error en el blade form.blade.php--}}
    @include('messages.form', ['message' => new App\Message])
  </form>
  <hr>
@endsection
