<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bitcourse;


class ShowbitcourseController extends Controller
{
    public function index()
    {
        $bitcourse = Bitcourse::all();
        return view('pages.bitcourse',[
            'bitcourses' => $bitcourse
        ]);
    }
}
