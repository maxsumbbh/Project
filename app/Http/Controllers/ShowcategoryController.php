<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subgroup;
use App\Subject;
use App\Header;


class ShowcategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $subgroup = Subgroup::all();
        $subject = Subject::all();
        $header = Header::all();
        return view('pages.category',[
            'categorys' => $category,
            'subgroups'=> $subgroup,
            'subjects'=> $subject,
            'headers' => $header,
        ]);
    }

    public function show($id) {
        $subgroup = Subgroup::findOrFail($id);
        $subjects = Subject::select('subcode','name','credit','text')->where('subgroup_id', '=', $id)->get();
        $header = Header::all();
        return view('pages.subject',[
            'subgroup' => $subgroup,
            'subjects' => $subjects,
            'headers' => $header,
        ]);
    }

    public function showdetail($id) {
        $subgroup = Subgroup::findOrFail($id);
        
        return view('pages.subjectdetail', compact('subjects'));
    }
}
