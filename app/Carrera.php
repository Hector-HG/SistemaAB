<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }
}
