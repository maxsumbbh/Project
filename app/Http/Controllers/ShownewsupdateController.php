<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsupdate;

class ShownewsupdateController extends Controller
{
    public function index()
    {
        $newsupdates = Newsupdate::orderBy('updated_at','desc')->paginate(9);
        $newsupdatess = Newsupdate::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.newsupdate',[
            'newsupdates' => $newsupdates,
            'newsupdatess' => $newsupdatess,
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
        
        $newsupdate = Newsupdate::findOrFail($id);
        return view('pages.readnewsupdate', compact('newsupdate'));
    }
}
