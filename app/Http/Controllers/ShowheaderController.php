<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;

class ShowheaderController extends Controller
{
    public function index()
    {
        $headers = Header::all();      
        return view('layouts.master',[
            'headers' => $headers
           
        ]);
    }
}
