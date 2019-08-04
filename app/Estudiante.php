<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
    public function request(){
        return $this->hasMany(Request::class);
    }
    public function curso(){
        return $this->belongsToMany(Instructor::class);
    }
    public function program(){
        return $this->belongsToMany(Program::class);
    }
}
