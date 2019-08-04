<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    public function instructor(){
        return $this->hasMany(Instructor::class);
    }
}
