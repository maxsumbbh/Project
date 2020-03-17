<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slideshow;
use App\Activities;
use App\About;
use App\Newsupdate;
use App\Header;


class ShowhomeController extends Controller
{
    public function index(){
        $slideshow = Slideshow::orderBy('updated_at','desc')->get();
        $activities = Activities::orderBy('updated_at','desc')->limit(3)->get();
        $about = About::all();
        $header = Header::all();
        $newsupdates = Newsupdate::orderBy('updated_at','desc')->limit(6)->get();
        $newsupdate = Newsupdate::orderBy('updated_at','desc')->limit(3)->get();

        return view('pages.home',[
            'slideshows' => $slideshow,
            'activities' => $activities,
            'abouts' => $about,
            'headers' => $header,
            'newsupdates' => $newsupdates,
            'newsupdatess' => $newsupdate

        ]);
    }
}
