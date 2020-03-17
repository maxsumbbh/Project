<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mitcourse;

class ShowmitcourseController extends Controller
{
    public function index()
    {
        $mitcourse = Mitcourse::all();
        return view('pages.mitcourse',[
            'mitcourses' => $mitcourse
        ]);
    }
}
