<?php

/*Route::get('/', function () {
    return view('welcome');
});*/

//home:
Route::get('/', ['as'=> 'home', 'uses' => 'PagesController@home']);

//contacto:
Route::get('contacto', ['as' => 'contactos', 'uses' => 'PagesController@contactos']);

//ruta para procesar el formulario:
Route::post('contacto', 'PagesController@mensajes');

//ruta a la que se le envía un parámetro:
Route::get('saludos/{nombre?}', ['as'=>'saludos', 'uses' =>'PagesController@saludos']);
