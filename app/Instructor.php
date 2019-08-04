<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    public function user(){
        return $this->hasOne(User::class);
    }
    public function speciality(){
        return $this->belongsTo(Speciality::class);
    }
    public function materia(){
        return $this->hasMany(Materia::class);
    }
    public function role(){
        return $this->belongsToMany(Role::class);
    }
}
