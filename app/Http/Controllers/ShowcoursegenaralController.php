<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coursegenaral;
use App\Header;
use App\Newsupdate;


class ShowcoursegenaralController extends Controller
{
    public function index()
    {
        $coursegenaral = Coursegenaral::all();
        $header = Header::all();
        $newsupdatess = Newsupdate::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.coursegenaral',[
            'coursegenarals' => $coursegenaral,
            'newsupdatess' => $newsupdatess,
            'headers' => $header,
        ]);
    }
}
