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

    public function setPasswordAttribute($password)
    {
      $this->attributes['password'] = bcrypt($password);
    }

    public function roles()
    {
      //pasamos como segundo parámetro el nombre de la tabla pivot: assigned_roles
      return $this->belongsToMany(Role::class, 'assigned_roles');
    }

    //función para evaluar roles: pasamos un array de roles
    public function hasRoles(array $roles)
    {
      foreach ($roles as $role)
      {
        return $this->roles->pluck('name')->intersect($roles)->count();
        /*foreach ($this->roles as $userRole)
        {
          if($userRole->name === $role)
          {
            return true;
          }
        }*/
      }
      return false;
    }

    public function isAdmin()
    {
      return $this->hasRoles(['admin', 'estudiante']);
    }

    //función donde se define la relación de muchos de un usuario con varios mensajes
    public function messages()
    {
      return $this->hasMany(Message::class);
    }

    public function note()
    {
      //ponemos como segundo parámetro la llave o prefijo que utilizamos
      //al crear la migración
      return $this->morphOne(Note::class, 'notable');
    }

    public function tags()
    {
      return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }
}
