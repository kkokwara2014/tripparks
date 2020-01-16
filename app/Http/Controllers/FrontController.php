<?php

namespace App\Http\Controllers;

use App\Location;
use App\Park;
use Illuminate\Http\Request;


use DB;

class FrontController extends Controller
{
    public function index()
    {

        $states = Location::orderBy('name', 'asc')->get();
        return view('frontend.index', compact('states'));
    }
    public function about()
    {

        return view('frontend.about');
    }
    public function contact()
    {

        return view('frontend.contact');
    }
   
    public function myform()
    {
        $states = Location::orderBy('name', 'asc')->get();
        return view('frontend.index', compact('states'));

    }


    /**

     * Get Ajax Request and restun Data

     *

     * @return \Illuminate\Http\Response

     */

    public function myformAjax($id)
    {
        $lgas=Park::where('location_id',$id)->orderBy('name','asc')->get();
        // return json_encode($lgas);
        return response()->json($lgas);
    }
}
