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
        "created_at"=>Carbon::now(),
        "updated_at"=>Carbon::now(),
      ]);

      //Redireccionar:
      return redirect()->route('messages.index');
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
