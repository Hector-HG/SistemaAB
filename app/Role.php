<?php

namespace SistemaAB;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function instructor(){
        return $this->belongsToMany(Instructor::class);
    }
}
