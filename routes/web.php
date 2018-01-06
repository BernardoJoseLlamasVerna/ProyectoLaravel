<?php

//usuario de prueba para probar el login:
/*Route::get('test', function(){
  $user = new App\User;
  $user->name = 'Cubiche';
  $user->email = 'cubiche@gmail.com';
  $user->password = bcrypt('123123');

  //guardamos el usuario:
  $user->save();
  //retornamos el usuario:
  return $user;
});*/

//crear usuario de prueba:
/*App\User::create([
  'name' => 'Estudiante',
  'email' => 'estudiante@gmail.com',
  'password' => bcrypt('789'),
  'role' => 'estudiante'
]);*/

//home:
Route::get('/', ['as'=> 'home', 'uses' => 'PagesController@home']);
//ruta a la que se le envía un parámetro:
Route::get('saludos/{nombre?}', ['as'=>'saludos', 'uses' =>'PagesController@saludos']);

//CRUD:
//index: se muestran todos los mensajes
/*Route::get('mensajes', ['as'=>'messages.index', 'uses'=>'MessagesController@index']);
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
Route::delete('mensajes/{id}', ['as'=>'messages.destroy', 'uses'=>'MessagesController@destroy']);*/

Route::resource('mensajes', 'MessagesController');
Route::resource('usuarios', 'UsersController');

//ruta de autenticación:
Route::get('login', 'Auth\LoginController@showLoginForm');
//envío de credenciales para loggearse: se emplea la acción login
Route::post('login', 'Auth\LoginController@login');
//ruta de logout:
Route::get('logout', 'Auth\LoginController@logout');
