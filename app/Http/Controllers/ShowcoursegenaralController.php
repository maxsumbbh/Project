<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coursegenaral;


class ShowcoursegenaralController extends Controller
{
    public function index()
    {
        $coursegenaral = Coursegenaral::all();
        return view('pages.coursegenaral',[
            'coursegenarals' => $coursegenaral
        ]);
    }
}
