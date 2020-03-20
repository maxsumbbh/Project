<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;
use App\Header;

class ShowawardController extends Controller
{
    public function index()
    {
        $award = Award::paginate(9);
        $awardss = Award::orderBy('updated_at','desc')->limit(3)->get();
        $header = Header::all();
        return view('pages.award',[
            'awards' => $award,
            'awardss' => $awardss,
            'headers' => $header,
        ]);
    }

          /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $award = Award::findOrFail($id);
        $header = Header::all();
        return view('pages.readaward',[
            'award' => $award,
            'headers' => $header,
        ]);
    }
}
