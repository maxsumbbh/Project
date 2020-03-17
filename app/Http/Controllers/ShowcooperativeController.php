<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooperative;

class ShowcooperativeController extends Controller
{
    public function index()
    {
        $cooperative = Cooperative::paginate(9);
        return view('pages.cooperative',[
            'cooperatives' => $cooperative
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
