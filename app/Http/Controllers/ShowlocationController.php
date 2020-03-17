<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class ShowlocationController extends Controller
{
    public function index()
    {
        $locations = Location::orderBy('updated_at','desc')->paginate(9);
        $locationss = Location::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.location',[
            'locations' => $locations,
            'locationss' => $locationss,
        ]);
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
        return view('pages.readlocation', compact('location'));
    }
}
