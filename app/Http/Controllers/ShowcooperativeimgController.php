<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooperative;
use App\Header;

class ShowcooperativeimgController extends Controller
{
    public function index()
    {
        $cooperatives = Cooperative::orderBy('updated_at','desc')->paginate(9);
        $header = Header::all();
        return view('pages.cooperativeimg',[
            'cooperatives' => $cooperatives,
            'headers' => $header,
        ]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
