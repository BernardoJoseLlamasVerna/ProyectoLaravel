<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CreateUserRequest;

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
        $roles = Role::pluck('display_name', 'id');

        return view('users.create', compact('roles'));
    }

    public function store(CreateUserRequest $request)
    {
        $user = User::create($request->all());
        $user->roles()->attach($request->roles);

        return redirect()->route('usuarios.index');
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

        $roles = Role::pluck('display_name', 'id');

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $this->authorize($user);
        $user->update($request->only('name', 'email'));

        $user->roles()->sync($request->roles);

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
