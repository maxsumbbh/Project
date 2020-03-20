<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subgroup;
use App\Subject;
use App\Header;
use App\Activities;


class ShowcategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $subgroup = Subgroup::all();
        $subject = Subject::all();
        $header = Header::all();
        $activitiess = Activities::orderBy('updated_at','desc')->limit(3)->get();
        return view('pages.category',[
            'categorys' => $category,
            'subgroups'=> $subgroup,
            'subjects'=> $subject,
            'headers' => $header,
            'activitiess' => $activitiess,
        ]);
    }

    public function show($id) {
        $subgroup = Subgroup::findOrFail($id);
        $subjects = Subject::select('subcode','name','credit','text')->where('subgroup_id', '=', $id)->get();
        $activitiess = Activities::orderBy('updated_at','desc')->limit(3)->get();
        $header = Header::all();
        return view('pages.subject',[
            'subgroup' => $subgroup,
            'subjects' => $subjects,
            'headers' => $header,
            'activitiess' => $activitiess,
        ]);
    }

    public function showdetail($id) {
        $subgroup = Subgroup::findOrFail($id);
        
        return view('pages.subjectdetail', compact('subjects'));
    }
}
