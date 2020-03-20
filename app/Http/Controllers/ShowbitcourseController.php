<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bitcourse;
use App\Header;


class ShowbitcourseController extends Controller
{
    public function index()
    {
        $bitcourse = Bitcourse::all();
        $header = Header::all();
        return view('pages.bitcourse',[
            'bitcourses' => $bitcourse,
            'headers' => $header,
        ]);
    }
}
