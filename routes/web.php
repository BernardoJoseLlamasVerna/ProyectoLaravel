<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
  echo "<a href=".route('contactos').">Contactos</a><br>";
  echo "<a href=".route('contactos').">Contactos</a><br>";
  echo "<a href=".route('contactos').">Contactos</a><br>";
  echo "<a href=".route('contactos').">Contactos</a><br>";
  echo "<a href=".route('contactos').">Contactos</a><br>";
});

Route::get('contacto', ['as' => 'contactos', function(){
  return "Sección de contactos";
}]);

//ruta a la que se le envía un parámetro:
Route::get('saludos/{nombre?}', function($nombre = "Magufo"){
  return "Hola desde saludos $nombre";
})->where('nombre', "[A-Za-z]+");
