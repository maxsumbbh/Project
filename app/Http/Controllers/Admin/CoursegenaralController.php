<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Coursegenaral;
use App\Http\Requests\CoursegenaralRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class CoursegenaralController extends Controller
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
        $coursegenarals = Coursegenaral::paginate(5);
        return view('admin.coursegenaral.index',[
            'coursegenarals'=> $coursegenarals
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
        return view('admin.coursegenaral.create');
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
            'text' => 'required'
        ]);
    
        $form_data = array(
            'text' => $request->text
        );

        Coursegenaral::create($form_data);

        return redirect('admin/bcoursegenaral')->with('success', 'เพิ่มข้อมูลหลักสูตรทั่วไปสำเร็จ');
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
        $coursegenaral = Coursegenaral::findOrFail($id);
        return view('admin.coursegenaral.edit', compact('coursegenaral'));
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
            'text' => 'required'
        ]);

         $form_data = array(
             'text' => $request->text
        );

        Coursegenaral::whereId($id)->update($form_data);
        return redirect('admin/bcoursegenaral')->with('success', 'แก้ไขข้อมูลหลักสูตรทั่วไปสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coursegenarals = Coursegenaral::find($id);

        $coursegenarals->delete();
        return redirect('admin/bcoursegenaral')->with('success', 'ลบข้อมูลหลักสูตรทั่วไปสำเร็จ');
    }
}
