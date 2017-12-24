<?php

namespace App\Http\Controllers;

use DB;
use App\Message;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    function __construct()
    {
      $this->middleware('auth', ['except' => ['create', 'store'] ]);
    }

    public function index()
    {
        //Para recuperar todos los mensajes:
        //ELOQUENT:
        //$messages = DB::table('messages')->get();
        //ORM:
        $messages = Message::all();

        return view('messages.index', compact('messages'));
    }

    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
      //Guardar Mensaje:
      //ELOQUENT:
      /*DB::table('messages')->insert([
        "nombre"=>$request->input('nombre'),
        "email"=>$request->input('email'),
        "mensaje"=>$request->input('mensaje'),
        "created_at"=>Carbon::now(),
        "updated_at"=>Carbon::now(),
      ]);*/
      //ORM:
      Message::create($request->all());

      //Redireccionar:
      return redirect()->route('mensajes.create')->with('info', 'Recibido');
    }

    public function show($id)
    {
      //Con el id buscamos en la BBDD el mensaje en cuestión:
      //ELOQUENT:
      /*$message = DB::table('messages')->where('id', $id)->first();*/
      //ORM:
      $message = Message::findOrFail($id);

      return view('messages.show', compact('message'));
    }

    public function edit($id)
    {
        //editamos un mensaje que enviamos a la página de editar:
        //ELOQUENT:
        /*$message = DB::table('messages')->where('id', $id)->first();*/
        //ORM:
        $message = Message::findOrFail($id);

        return view('messages.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        //actualizar:
        //ELOQUENT:
        /*DB::table('messages')->where('id', $id)->update([
          "nombre"=>$request->input('nombre'),
          "email"=>$request->input('email'),
          "mensaje"=>$request->input('mensaje'),
          "updated_at"=>Carbon::now(),
        ]);*/
        //ORM:
        Message::findOrFail($id)->update($request->all());
        //Redireccionar:
        return redirect()->route('mensajes.index');
    }

    public function destroy($id)
    {
        //eliminar mensaje: sacamos el mensaje que queremos eliminar mediante el id que se le pasa
        //                  por parámetro.
        //ELOQUENT:
        //DB::table('messages')->where('id', $id)->delete();
        //ORM:
        Message::findOrFail($id)->delete();

        //redireccionar:
        return redirect()->route('mensajes.index');
    }
}
