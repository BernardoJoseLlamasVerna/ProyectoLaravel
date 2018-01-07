<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    //función before que evalúa si eres el admin para dejar que se ejecuten el resto de funciones:
    //edit y update:
    public function before($user, $ability)
    {
      if($user->isAdmin())
      {
        return true;
      }
    }

    //parámetros de entrada: usuario autenticado, usuario que queremos ver
    public function edit(User $authUser, User $user)
    {
      //verificamos que el id del usuario autenticado es el mismo del que estamos viendo en edit
      //si es así, dejamos pasar:
      return $authUser->id === $user->id;
    }

    //parámetros de entrada: usuario autenticado, usuario que queremos ver
    public function update(User $authUser, User $user)
    {
      //verificamos que el id del usuario autenticado es el mismo del que estamos viendo en edit
      //si es así, dejamos pasar:
      return $authUser->id === $user->id;
    }

    //parámetros de entrada: usuario autenticado, usuario que queremos ver
    public function destroy(User $authUser, User $user)
    {
      //verificamos que el id del usuario autenticado es el mismo del que estamos viendo en edit
      //si es así, dejamos pasar:
      return $authUser->id === $user->id;
    }
}
