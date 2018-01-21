<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['nombre', 'email', 'mensaje'];

    //nueva relación: un mensaje pertenece a un determinado usuario:
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function note()
    {
      //ponemos como segundo parámetro la llave o prefijo que utilizamos
      //al crear la migración
      return $this->morphOne(Note::class, 'notable');
    }

    public function tags()
    {
      return $this->morphToMany(Tag::class, 'taggable');
    }
}
