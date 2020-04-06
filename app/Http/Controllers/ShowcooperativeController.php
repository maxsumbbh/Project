<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooperative;
use App\Header;

class ShowcooperativeController extends Controller
{
    public function index()
    {
        $cooperative = Cooperative::orderBy('updated_at','desc')->paginate(9);
        $header = Header::all();
        return view('pages.cooperative',[
            'cooperatives' => $cooperative,
            'headers' => $header,
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
