<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
use App\ActivitieImage;
use App\Header;

class ShowactivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $activities = Activities::paginate(9)->orderBy('updated_at','desc')->get();
        $activities = Activities::orderBy('updated_at','desc')->paginate(9);
        $activitiess = Activities::orderBy('updated_at','desc')->limit(3)->get();
        $header = Header::all();
        return view('pages.activities',[
            'activities' => $activities,
            'activitiess' => $activitiess,
            'headers' => $header,

           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activities = Activities::findOrFail($id);
        $activitieImage = ActivitieImage::select('activitie_id','image_path')->where('activitie_id', '=', $id)->get();
        $header = Header::all();
        return view('pages.readactivitie',[
            'activities' => $activities,
            'activitieImage' => $activitieImage,
            'headers' => $header,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
