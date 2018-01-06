<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    //función para evaluar roles: pasamos un array de roles
    public function hasRoles(array $roles)
    {
      foreach ($roles as $role)
      {
        if($this->role === $role)
        {
          return true;
        }
      }

      return false;
    }
}
