<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Mitcourse;
use App\Http\Requests\MitcourseRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class MitcourseController extends Controller
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
        $mitcourses = Mitcourse::paginate(5);
        return view('admin.mitcourse.index',[
            'mitcourses'=> $mitcourses
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
        return view('admin.mitcourse.create');
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

        Mitcourse::create($form_data);

        return redirect('admin/bmitcourse')->with('success', 'เพิ่มข้อมูลหลักสูตรสำเร็จ');
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
        $mitcourse = Mitcourse::findOrFail($id);
        return view('admin.mitcourse.edit', compact('mitcourse'));
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

        Mitcourse::whereId($id)->update($form_data);
        return redirect('admin/bmitcourse')->with('success', 'แก้ไขข้อมูลหลักสูตรสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mitcourse = Mitcourse::find($id);

        $mitcourse->delete();
        return redirect('admin/bmitcourse')->with('success', 'ลบข้อมูลหลักสูตรสำเร็จ');
    }
}
