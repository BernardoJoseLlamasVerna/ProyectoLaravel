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
        <a class="{{ activeMenu('saludos/*') }}"
           href="{{route('saludos', 'BerniPollas')}}">Saludos</a>
        {{--Contactos--}}
        <a class="{{ activeMenu('mensajes/create') }}"
           href="{{route('mensajes.create')}}">Contactos</a>
        {{--Mensajes--}}
        <a class="{{ activeMenu('mensajes/index') }}"
           href="{{route('mensajes.index')}}">Mensajes</a>
      </nav>
    </header>

    @yield('contenido')
    <footer>Copyright {{date('Y')}}</footer>
  </body>
</html>
