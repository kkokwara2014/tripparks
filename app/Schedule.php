<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    
    public function vehicle(){
        return $this->hasMany(Vehicle::class);
    }
    public function destination(){
        return $this->hasMany(Destination::class);
    }
}
