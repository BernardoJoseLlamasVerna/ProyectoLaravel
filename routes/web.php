<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

//home:
Route::get('/', ['as'=> 'home', 'uses' => 'PagesController@home']);

//contacto:
Route::get('contacto', ['as' => 'contactos', 'uses' => 'PagesController@contactos']);

//ruta a la que se le envía un parámetro:
/*Route::get('saludos/{nombre?}', ['as'=>'saludos', function($nombre = "Magufo"){
  $html = "<h2>Contenido html</h2>";
  $consolas = ["Play", "XBOX", "Nintendo"];
  //$consolas =[];

  return view('saludo', compact('nombre', 'html', 'consolas'));
}])->where('nombre', "[A-Za-z]+");*/

Route::get('saludos/{nombre?}', ['as'=>'saludos', 'uses' =>'PagesController@saludos']);
