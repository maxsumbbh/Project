<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coursegenaral;
use App\Header;


class ShowcoursegenaralController extends Controller
{
    public function index()
    {
        $coursegenaral = Coursegenaral::all();
        $header = Header::all();
        return view('pages.coursegenaral',[
            'coursegenarals' => $coursegenaral,
            'headers' => $header,
        ]);
    }
}
