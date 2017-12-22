<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mi sitio</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="<?php echo route('home')?>">Inicio</a>
        <a href="<?php echo route('saludos', 'BerniPollas')?>">Saludos</a>
        <a href="<?php echo route('contactos')?>">Contactos</a>
      </nav>
    </header>

    @yield('contenido')
    <footer>Copyright {{date('Y')}}</footer>
  </body>
</html>
