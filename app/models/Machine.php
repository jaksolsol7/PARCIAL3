<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    public function sede(){
        return $this->hasMany('App\Models\Sede');
    }
}
