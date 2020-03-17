<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subgroup;
use App\Subject;


class ShowcategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $subgroup = Subgroup::all();
        $subject = Subject::all();
        return view('pages.category',[
            'categorys' => $category,
            'subgroups'=> $subgroup,
            'subjects'=> $subject,
        ]);
    }

    public function show($id) {
        $subgroup = Subgroup::findOrFail($id);
        $subjects = Subject::select('subcode','name','credit','text')->where('subgroup_id', '=', $id)->get();
        return view('pages.subject', compact('subgroup','subjects'));
    }

    public function showdetail($id) {
        $subgroup = Subgroup::findOrFail($id);
        
        return view('pages.subjectdetail', compact('subjects'));
    }
}
