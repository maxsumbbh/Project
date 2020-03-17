<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form;


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
        return view('pages.form',[
            'forms' => $form
        ]);
    }
}