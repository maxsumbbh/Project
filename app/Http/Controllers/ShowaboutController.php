<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\About;
use App\Header;

class ShowaboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        $members = Member::all();
        $header = Header::all();
        return view('pages.about',[
            'abouts' => $about,
            'members'=> $members,
            'headers' => $header,
        ]);
    }
}
