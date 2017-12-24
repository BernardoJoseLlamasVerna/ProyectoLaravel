<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      .active{
        text-decoration: none;
        color: green;
      }
      .error{
        color:red;
        font-size:12px;
      }
    </style>
    <title>Mi sitio</title>
  </head>
  <body>
    <header>
      {{--funcion con la que ponemos activo/desactivo los links de navegación--}}
      <?php
        function activeMenu($url)
        {
          return request()->is($url) ? 'active':'';
        }
      ?>
      <nav>
        {{--Inicio--}}
        <a class="{{ activeMenu('/') }}"
           href="{{route('home')}}">Inicio</a>
        {{--Saludos--}}
        <a class="{{ activeMenu('saludos*') }}"
           href="{{route('saludos', 'BerniPollas')}}">Saludos</a>
        {{--Contactos--}}
        <a class="{{ activeMenu('mensajes/create') }}"
           href="{{route('mensajes.create')}}">Contactos</a>
        {{--Logout:checkeamos antes si hay un usuario autenticado--}}
        @if (auth()->check())
          {{--Mensajes--}}
          <a class="{{ activeMenu('mensajes') }}"
             href="{{route('mensajes.index')}}">Mensajes</a>
          {{--Cerrar sesión--}}
          <a href="/logout">Cerrar sesión {{auth()->user()->name}}</a>
        @endif
        {{--Login--}}
        {{--evaluamos quién se inscribe en la app--}}
        @if (auth()->guest())
          <a class="{{ activeMenu('login') }}" href="/login">Login</a>
        @endif
      </nav>
    </header>

    @yield('contenido')
    <footer>Copyright {{date('Y')}}</footer>
  </body>
</html>
