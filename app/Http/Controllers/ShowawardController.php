<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;

class ShowawardController extends Controller
{
    public function index()
    {
        $award = Award::paginate(9);
        $awardss = Award::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.award',[
            'awards' => $award,
            'awardss' => $awardss
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
        return view('pages.readaward', compact('award'));
    }
}
