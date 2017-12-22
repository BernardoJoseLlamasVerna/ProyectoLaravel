<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ['as'=> 'home', function(){
  return view('home');
}]);

Route::get('contacto', ['as' => 'contactos', function(){
  return view('contactos');
}]);

//ruta a la que se le envía un parámetro:
Route::get('saludos/{nombre?}', ['as'=>'saludos', function($nombre = "Magufo"){
  $html = "<h2>Contenido html</h2>";
  $consolas = ["Play", "XBOX", "Nintendo"];
  //$consolas =[];

  return view('saludo', compact('nombre', 'html', 'consolas'));
}])->where('nombre', "[A-Za-z]+");
