<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Subgroup;
use App\Category;
use App\Http\Requests\SubgroupRequest;
use illuminate\Support\Str;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class SubgroupController extends Controller
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
        $subgroups = Subgroup::with('category')->orderBy('category_id','desc')->paginate(10);
        return view('admin.subgroup.index',[
            'subgroups'=> $subgroups
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
        $category = Category::all(['id', 'name']);
        return view('admin.subgroup.create',[
            'categorys' => $category
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
            'name' => 'required',
            'credit' => 'required',
            'category_id' => 'required'
        ]);
    
        $form_data = array(
            'name' => $request->name,
            'credit' => $request->credit,
            'category_id' => $request->category_id
        );

        Subgroup::create($form_data);

        return redirect('admin/bsubgroup')->with('success', 'เพิ่มข้อมูลกลุ่มวิชาสำเร็จ');
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
        $categorys = Category::all(['id', 'name']);
        $subgroup = Subgroup::findOrFail($id);
        return view('admin.subgroup.edit', compact('categorys','subgroup'));
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
            'name' => 'required',
            'credit' => 'required',
            'category_id' => 'required'
        ]);

        $form_data = array(
            'name' => $request->name,
            'credit' => $request->credit,
            'category_id' => $request->category_id
        );

    Subgroup::whereId($id)->update($form_data);
    return redirect('admin/bsubgroup')->with('success', 'แก้ไขข้อมูลกลุ่มวิชาสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subgroups = Subgroup::find($id);

        $subgroups->delete();
        return redirect('admin/bsubgroup')->with('success', 'ลบข้อมูลกลุ่มวิชาสำเร็จ');
    }
}
