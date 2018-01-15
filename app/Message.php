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
}
