<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\About;

class ShowaboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        $members = Member::all();
        return view('pages.about',[
            'abouts' => $about,
            'members'=> $members
        ]);
    }
}
