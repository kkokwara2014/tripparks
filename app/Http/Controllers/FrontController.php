<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $states=Location::orderBy('name','asc')->get();

        // $output='';
        // if ($states->count()>0) {
        //    foreach ($states as $state) {
        //        $output.='<option value='.$state->id.'>'.$state->name.'</option>';
        //    }
        //    $output='';
        //    echo $output;
        // }

        return view('frontend.index',compact('states'));
    }
    public function about(){

        return view('frontend.about');
    }
    public function contact(){

        return view('frontend.contact');
    }
    
}
