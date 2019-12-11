<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
    public function machine(){
        return $this->belongsTo('App\Models\Machine');
    }
    public function reports(){
        return $this->hasMany('App\Models\Report');
    }
}
