<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargas_academica extends Model
{
    //
    public function materiasalu(){
        return $this->belongsTo(Materia::class,'id','id_materia');
    }

    public function estudiante(){
        return $this->belongsTo(Estudiante::class,'id','matricula');
    }
}
