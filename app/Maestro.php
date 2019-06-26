<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    //
    public function materiasasig(){
        return $this->hasMany(Materia::class);
    }
}
