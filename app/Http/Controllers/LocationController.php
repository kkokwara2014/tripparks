<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    
    public function getLocations(){
        $states=Location::orderBy('name','asc')->get();

        
        
    }
}
