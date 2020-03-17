<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Position;
use App\Http\Requests\PositionRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class PositionController extends Controller
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
        $positions = Position::all(); //ดึงข้อมูลตำแหน่งทั้งหมดจากตาราง position เก็บไว้ที่ตัวแปร
        return view('admin.position.index',[
            'positions' => $positions
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
        return view('admin.position.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PositionRequest $request)
    {
        $positions = new Position();
        $positions->name = $request->name;
        $positions->save();

        return redirect('admin/bposition')->with('success', 'เพิ่มข้อมูลตำแหน่งอาจารย์สำเร็จ');
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
        $positions = Position::findOrFail($id);
        return view('admin.position.edit',[
            'positions' => $positions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PositionRequest $request, $id)
    {
        $positions = Position::find($id);
        $positions->update($request->all());

        return redirect('admin/bposition')->with('success', 'แก้ไขข้อมูลตำแหน่งอาจารย์สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $positions = Position::find($id);
        $positions->delete();
        return redirect('admin/bposition')->with('success', 'ลบข้อมูลตำแหน่งอาจารย์สำเร็จ');
    }
}
