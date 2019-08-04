<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    public function materia(){
        return $this->belongsTo(Materia::class);
    }
    public function request(){
        return $this->belongsTo(Request::class);
    }
}
