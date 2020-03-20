<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mitcourse;
use App\Header;

class ShowmitcourseController extends Controller
{
    public function index()
    {
        $mitcourse = Mitcourse::all();
        $header = Header::all();
        return view('pages.mitcourse',[
            'mitcourses' => $mitcourse,
            'headers' => $header,
        ]);
    }
}
