<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //campos que se pueden asignar masivamente:
    protected $fillable = ['body'];

    public function note()
    {
      return $this->morphTo();
    }
}
