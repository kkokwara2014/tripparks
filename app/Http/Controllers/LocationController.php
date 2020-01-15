<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class LocationController extends Controller
{
    
    public function getLocations(){
        $locations=Location::orderBy('name','asc')->get();
        return response()->json($locations);
    }
}
