<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Header;

class ShowlocationController extends Controller
{
    public function index()
    {
        $locations = Location::orderBy('updated_at','desc')->paginate(9);
        $locationss = Location::orderBy('updated_at','desc')->limit(3)->get();
        $header = Header::all();
        return view('pages.location',[
            'locations' => $locations,
            'locationss' => $locationss,
            'headers' => $header,
        ]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        
        $location = Location::findOrFail($id);
        $header = Header::all();
        return view('pages.readlocation',[
            'location' => $location,
            'headers' => $header,
        ]);
    }
}
