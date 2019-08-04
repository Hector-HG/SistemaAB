<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    public function materia(){
        return $this->belongsToMany(Materia::class);
    }
    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
}
