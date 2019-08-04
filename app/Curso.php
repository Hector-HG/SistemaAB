<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function materia(){
        return $this->belongsTo(Materia::class);
    }
    public function estudiante(){
        return $this->belongsToMany(Estudiante::class);
    }
}
