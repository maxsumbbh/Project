<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bitcourse;
use App\Header;
use App\Newsupdate;


class ShowbitcourseController extends Controller
{
    public function index()
    {
        $bitcourse = Bitcourse::all();
        $header = Header::all();
        $newsupdatess = Newsupdate::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.bitcourse',[
            'bitcourses' => $bitcourse,
            'headers' => $header,
            'newsupdatess' => $newsupdatess,
        ]);
    }
}
