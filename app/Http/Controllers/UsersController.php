<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    function __construct()
    {
      //roles:(lo_que_sea) le estamos diciendo qué parametro queremos que le aplique el middleware de 'roles'
      $this->middleware(['auth', 'roles:admin, estudiante']);
    }

    public function index()
    {
      $users = \App\User::all();

      return view('users.index', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
