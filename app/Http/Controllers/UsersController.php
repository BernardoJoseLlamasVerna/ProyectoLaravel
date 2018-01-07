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
      $this->middleware('auth', ['except' =>['show']]);
      $this->middleware('roles:admin', ['except' =>['edit', 'update', 'show']]);

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
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('edit',$user);

        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $this->authorize($user);
        $user->update($request->all());

        return back()->with('info', 'Usuario actualizado');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $this->authorize($user);
        $user->delete();

        return back();
    }
}
