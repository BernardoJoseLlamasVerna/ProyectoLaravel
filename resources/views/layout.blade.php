<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      .active{
        text-decoration: none;
        color: green;
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
        <a class="{{ activeMenu('/') }}"
           href="{{route('home')}}">Inicio</a>
        <a class="{{ activeMenu('saludos/*') }}"
           href="{{route('saludos', 'BerniPollas')}}">Saludos</a>
        <a class="{{ activeMenu('contacto') }}"
           href="{{route('contactos')}}">Contactos</a>
      </nav>
    </header>

    @yield('contenido')
    <footer>Copyright {{date('Y')}}</footer>
  </body>
</html>
