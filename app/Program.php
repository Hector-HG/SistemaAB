<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function curso(){
        return $this->hasMany(Curso::class);
    }
    public function estudiante(){
        return $this->belongsToMany(Estudiante::class);
    }
}
