<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Studentyear;
use App\Http\Requests\StudentyearRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class StudentyearController extends Controller
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
        $studentyears = Studentyear::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง studentyear เก็บไว้ที่ตัวแปร
        return view('admin.studentyear.index',[
            'studentyears' => $studentyears
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
        return view('admin.studentyear.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentyear = new Studentyear();
        $studentyear->name = $request->name;
        $studentyear->save();

        return redirect('admin/bstudentyear')->with('success', 'เพิ่มข้อมูลปีการศึกษาสำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $studentyears = Studentyear::findOrFail($id);
        return view('admin.studentyear.edit',[
            'studentyears' => $studentyears
        ]);
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
        $studentyears = Studentyear::find($id);
        $studentyears->update($request->all());

        return redirect('admin/bstudentyear')->with('success', 'แก้ไขข้อมูลปีการศึกษาสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentyears = Studentyear::find($id);
        $studentyears->delete();
        return redirect('admin/bstudentyear')->with('success', 'ลบข้อมูลปีการศึกษาสำเร็จ');
    }
}
