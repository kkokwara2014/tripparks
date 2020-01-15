<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    
    public function getLocations(){
        $states=Location::orderBy('name','asc')->get();

        $output='';
        if ($states->count()>0) {
           foreach ($states as $state) {
               $output.='<option value='.$state->id.'>'.$state->name.'</option>';
           }
           $output='';
           echo $output;
        }
    }
}
