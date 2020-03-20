<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mitcourse;
use App\Header;
use App\Activities;

class ShowmitcourseController extends Controller
{
    public function index()
    {
        $mitcourse = Mitcourse::all();
        $header = Header::all();
        $activitiess = Activities::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.mitcourse',[
            'mitcourses' => $mitcourse,
            'headers' => $header,
            'activitiess' => $activitiess,
        ]);
    }
}
