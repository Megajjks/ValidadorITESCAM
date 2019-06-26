<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    public function cargasacademicas(){
        return $this->hasMany(Cargas_academica::class);
    }
}
