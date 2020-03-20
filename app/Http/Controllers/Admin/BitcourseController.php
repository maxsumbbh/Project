<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Bitcourse;
use App\Http\Requests\BitcourseRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class BitcourseController extends Controller
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
        $bitcourses = Bitcourse::paginate(10);
        return view('admin.bitcourse.index',[
            'bitcourses'=> $bitcourses
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
        return view('admin.bitcourse.create');
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

        Bitcourse::create($form_data);

        return redirect('admin/bbitcourse')->with('success', 'เพิ่มข้อมูลหลักสูตรสำเร็จ');
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
        $bitcourse = Bitcourse::findOrFail($id);
        return view('admin.bitcourse.edit', compact('bitcourse'));
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

        Bitcourse::whereId($id)->update($form_data);
        return redirect('admin/bbitcourse')->with('success', 'แก้ไขข้อมูลหลักสูตรสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bitcourse = Bitcourse::find($id);

        $bitcourse->delete();
        return redirect('admin/bbitcourse')->with('success', 'ลบข้อมูลหลักสูตรสำเร็จ');
    }
}
