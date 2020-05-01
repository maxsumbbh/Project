<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Subject;
use App\Subgroup;
use App\Http\Requests\SubjectRequest;
use illuminate\Support\Str;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $subjects = Subject::with('subgroup')->orderBy('subgroup_id','desc')->paginate(10);
        return view('admin.subject.index',[
            'subjects'=> $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $subgroup = Subgroup::all(['id', 'name']);
        return view('admin.subject.create',[
            'subgroups' => $subgroup
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subcode' => 'required',
            'name' => 'required',
            'credit' => 'required',
            'subgroup_id' => 'required',
            'text' => 'required'
        ]);
    
        $form_data = array(
            'subcode' => $request->subcode,
            'name' => $request->name,
            'credit' => $request->credit,
            'subgroup_id' => $request->subgroup_id,
            'text' => $request->text
        );

        Subject::create($form_data);

        return redirect('admin/bsubject')->with('success', 'เพิ่มข้อมูลวิชาสำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $subgroups = Subgroup::all(['id', 'name']);
        $subject = Subject::findOrFail($id);
        return view('admin.subject.edit', compact('subgroups','subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'subcode' => 'required',
            'name' => 'required',
            'credit' => 'required',
            'subgroup_id' => 'required',
            'text' => 'required'
        ]);

        $form_data = array(
            'subcode' => $request->subcode,
            'name' => $request->name,
            'credit' => $request->credit,
            'subgroup_id' => $request->subgroup_id,
            'text' => $request->text
        );

    Subject::whereId($id)->update($form_data);
    return redirect('admin/bsubject')->with('success', 'แก้ไขข้อมูลวิชาสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subjects = Subject::find($id);

        $subjects->delete();
        return redirect('admin/bsubject')->with('success', 'ลบข้อมูลวิชาสำเร็จ');
    }
}
