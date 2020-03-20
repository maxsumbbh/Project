<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\About;
use App\Header;
use App\Newsupdate;

class ShowaboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        $members = Member::all();
        $header = Header::all();
        $newsupdatess = Newsupdate::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.about',[
            'abouts' => $about,
            'members'=> $members,
            'headers' => $header,
            'newsupdatess' => $newsupdatess,
        ]);
    }
}
