<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        //Para recuperar todos los mensajes:
        $messages = DB::table('messages')->get();

        return view('messages.index', compact('messages'));
    }

    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
      //Guardar Mensaje:
      DB::table('messages')->insert([
        "nombre"=>$request->input('nombre'),
        "email"=>$request->input('email'),
        "mensaje"=>$request->input('mensaje'),
        "created_at"=>Carbon::now(),
        "updated_at"=>Carbon::now(),
      ]);

      //Redireccionar:
      return redirect()->route('messages.index');
    }

    public function show($id)
    {
      //Con el id buscamos en la BBDD el mensaje en cuestión:
      $message = DB::table('messages')->where('id', $id)->first();

      return view('messages.show', compact('message'));
    }

    public function edit($id)
    {
        //editamos un mensaje que enviamos a la página de editar:
        $message = DB::table('messages')->where('id', $id)->first();

        return view('messages.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        //actualizar:
        DB::table('messages')->where('id', $id)->update([
          "nombre"=>$request->input('nombre'),
          "email"=>$request->input('email'),
          "mensaje"=>$request->input('mensaje'),
          "updated_at"=>Carbon::now(),
        ]);
        //Redireccionar:
        return redirect()->route('messages.index');
    }

    public function destroy($id)
    {
        //eliminar mensaje: sacamos el mensaje que queremos eliminar mediante el id que se le pasa
        //                  por parámetro.
        DB::table('messages')->where('id', $id)->delete();
        
        //redireccionar:
        return redirect()->route('messages.index');
    }
}
