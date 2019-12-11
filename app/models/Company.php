<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function sedes(){
        return $this->hasMany('App\Models\Sede');
    }
}
