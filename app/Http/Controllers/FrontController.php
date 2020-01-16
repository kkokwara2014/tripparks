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

    public function getStates(Request $request)
    {
        $states = Location::orderBy('name', 'asc')->get();
        $output = '';
        if ($states->count() > 0) {
            foreach ($states as $state) {
                $output .= '<option value=' . $state->id . '>' . $state->name . '</option>';
            }
            $output = '';
            echo $output;
        }
    }

    public function fetch(Request $request)
    {
        $state = $request->states;
        $state_id = $request->get('value');
        $dependent = $request->get('dependent');
        //  $data = DB::table('country_state_city')
        //    ->where($select, $value)
        //    ->groupBy($dependent)
        //    ->get();

        $data = Park::where($state, $state_id)->groupBy($dependent)->get();
        $output = '<option value="">Select ' . ucfirst($dependent) . '</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->$dependent . '">' . $row->$dependent . '</option>';
        }
        echo $output;
    }


    public function myform()

    {

        // $states = DB::table("locations")->lists("name","id");

        // return view('myform',compact('states'));

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

        // $lgas = DB::table("parks")
        //             ->where("state_id",$id)
        //             ->lists("name","id");


        $lgas=Park::where('location_id',$id)->orderBy('name','asc')->get();

        return json_encode($lgas);
        // return response()->json($lgas);

    }
}
