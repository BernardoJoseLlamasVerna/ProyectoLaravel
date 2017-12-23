<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        //
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
      ]);

      //Redireccionar:
      return "Hecho";
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
