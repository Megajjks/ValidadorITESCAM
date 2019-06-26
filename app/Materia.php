<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    public function cargasacademicas(){
        return $this->hasMany(Cargas_academica::class);
    }
    public function maestrosasig(){
        return $this->belongsTo(Maestro::class,'id_materia','id_maestro');
    }
}
