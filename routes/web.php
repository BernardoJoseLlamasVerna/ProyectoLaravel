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
//index: se muestran todos los mensajes
Route::get('mensajes', ['as'=>'messages.index', 'uses'=>'MessagesController@index']);
//create:
Route::get('mensajes/create', ['as'=>'messages.create', 'uses'=>'MessagesController@create']);
//store:
Route::post('mensajes', ['as'=>'messages.store', 'uses'=>'MessagesController@store']);
//show:
Route::get('mensajes/{id}', ['as'=>'messages.show', 'uses'=>'MessagesController@show']);
//edit:
Route::get('mensajes/{id}/edit', ['as'=>'messages.edit', 'uses'=>'MessagesController@edit']);
//update:
Route::put('mensajes/{id}', ['as'=>'messages.update', 'uses'=>'MessagesController@update']);
//delete:
Route::delete('mensajes/{id}', ['as'=>'messages.destroy', 'uses'=>'MessagesController@destroy']);
