<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{
    function __construct()
    {
      //roles:(lo_que_sea) le estamos diciendo qué parametro queremos que le aplique el middleware de 'roles'
      $this->middleware('auth');
      $this->middleware('roles:admin', ['except' =>['edit']]);

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
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return back()->with('info', 'Usuario actualizado');
    }

    public function destroy($id)
    {
        //
    }
}
