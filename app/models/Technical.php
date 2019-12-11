<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    public function Report(){
        return $this->hasMany('App\Models\Report');
    }
}
