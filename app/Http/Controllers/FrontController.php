<?php

namespace App\Http\Controllers;

use App\Location;
use App\Park;
use Illuminate\Http\Request;

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
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        //  $data = DB::table('country_state_city')
        //    ->where($select, $value)
        //    ->groupBy($dependent)
        //    ->get();

        $data = Park::where($select, $value)->groupBy($dependent)->get();
        $output = '<option value="">Select ' . ucfirst($dependent) . '</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->$dependent . '">' . $row->$dependent . '</option>';
        }
        echo $output;
    }
}
