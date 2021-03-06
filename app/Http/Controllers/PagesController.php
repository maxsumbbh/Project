<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Newsupdate;

class PagesController extends Controller
{
    public function home(){
       
        return view('pages.homepage');
    }
    public function member(){
       
        return view('pages.member');
    }
    public function course(){
       
        return view('pages.course');
    }
    public function tact(){
        $header = Header::all();
        $newsupdatess = Newsupdate::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.tact',[
            'headers' => $header,
            'newsupdatess' => $newsupdatess,
            ]);
    }
    public function test(){
        
        return view('pages.test');
    }
    public function com(){
       
        return view('pages.com');
    }
    public function activities(){
       
        return view('pages.activities');
    }
    public function cooperative(){
       
        return view('pages.cooperative');
    }
    public function newupdate(){
       
        return view('pages.newupdate');
    }
    public function about(){
       
        return view('pages.about');
    }
    public function fund(){
       
        return view('pages.fund');
    }
    public function award(){
       
        return view('pages.award');
    }
    public function dashboard(){
       
        return view('pages.dashboard');
    }
}
