<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    

    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
}
