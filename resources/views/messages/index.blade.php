@extends('layout')

@section('contenido')
  <h1>Todos los mensajes</h1>

  {{--tabla para mostrar los mensajes--}}
  <table width="100%" border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Mensaje</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($messages as $message)
        <tr>
          <td>{{ $message->id }}</td>
          <td>
            {{--al clickar sobre un nombre me lleva a su página show--}}
            <a href="{{ route('mensajes.show', $message->id) }}">
              {{ $message->nombre }}
            </a>
          </td>
          <td>{{ $message->email }}</td>
          <td>{{ $message->mensaje }}</td>
          <td>
            <a href="{{ route('mensajes.edit', $message->id) }}">Editar</a>
            <form style="display:inline" method="post" action="{{ route('mensajes.destroy', $message->id) }}">
              {!! csrf_field() !!}
              {!! method_field('DELETE') !!}
              <button type="submit">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <hr>
@endsection
