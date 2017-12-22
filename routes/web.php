<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ['as'=> 'home', function(){
  return view('home');
}]);

Route::get('contacto', ['as' => 'contactos', function(){
  return "Sección de contactos";
}]);

//ruta a la que se le envía un parámetro:
Route::get('saludos/{nombre?}', ['as'=>'saludos', function($nombre = "Magufo"){
  return view('saludo', compact('nombre'));
}])->where('nombre', "[A-Za-z]+");
