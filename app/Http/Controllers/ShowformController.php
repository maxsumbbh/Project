<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form;
use App\Header;
use App\Activities;


class ShowformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form::paginate(9);
        $header = Header::all();
        $activitiess = Activities::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.form',[
            'forms' => $form,
            'activitiess' => $activitiess,
            'headers' => $header,
        ]);
    }
}