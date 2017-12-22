<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>Home</h1>
    <header>
      <nav>
        <a href="<?php echo route('home')?>">Inicio</a>
        <a href="<?php echo route('saludos', 'BerniPollas')?>">Saludos</a>
        <a href="<?php echo route('contactos')?>">Contactos</a>
      </nav>
    </header>
  </body>
</html>
