<?php
//home:
Route::get('/', ['as'=> 'home', 'uses' => 'PagesController@home']);
//contacto:
Route::get('contacto', ['as' => 'contactos', 'uses' => 'PagesController@contactos']);
//ruta para procesar el formulario:
Route::post('contacto', 'PagesController@mensajes');
//ruta a la que se le envía un parámetro:
Route::get('saludos/{nombre?}', ['as'=>'saludos', 'uses' =>'PagesController@saludos']);

//CRUD:
Route::get('mensajes', ['as'=>'messages.index', 'uses'=>'MessagesController@index']);
//create: llamamos a la ruta messages.create
Route::get('mensajes/create', ['as'=>'messages.create', 'uses'=>'MessagesController@create']);
//store: llamamos a la ruta messages.store
Route::post('mensajes', ['as'=>'messages.store', 'uses'=>'MessagesController@store']);
