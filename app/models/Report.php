<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function technical(){
        return $this->belongsTo('App\Models\technical');
    }
    public function sede(){
        return $this->belongsTo('App\Models\Sede');
    }
}
