<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apprentice;
use App\Header;

class ShowapprenticeimgController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apprentices = Apprentice::paginate(9);
        $header = Header::all();
        return view('pages.apprenticeimg',[
            'apprentices' => $apprentices,
            'headers' => $header,
        ]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

}
