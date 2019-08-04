<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }
    public function curso(){
        return $this->hasMany(Curso::class);
    }
    public function request(){
        return $this->belongsToMany(Request::class);
    }
}
