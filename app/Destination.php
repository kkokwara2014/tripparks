<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    
    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
}
