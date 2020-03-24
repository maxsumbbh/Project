<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Apprentice;
use App\Http\Requests\ApprenticeRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class ApprenticeController extends Controller
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
        $apprentices = Apprentice::paginate(10);
        return view('admin.apprentice.index',[
            'apprentices'=> $apprentices
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
        $apprentices = Apprentice::all(['id', 'name']);
        return view('admin.apprentice.create',[
            'apprentices' => $apprentices      
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
            'text' => 'required',
            'location' => 'required',
            'year' => 'required',
            'image' => 'required|image|max:2048',
            'file' => 'required|mimes:doc,docx,pdf,xls'
        ]);

        //เพิ่มรูป
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        //เพิ่มไฟล์
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('files'), $fileName);

        $form_data = array(
            'name' => $request->name,
            'text' => $request->text,
            'location' => $request->location,
            'year' => $request->year,
            'image' => $new_name,
            'file' => $fileName
        );

        Apprentice::create($form_data);

        return redirect('admin/bapprentice')->with('success', 'เพิ่มข้อมูลฝึกงานสำเร็จ');
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
        $apprentices = Apprentice::findOrFail($id);
        return view('admin.apprentice.edit', compact('apprentices'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');

        $fileName = $request->hidden_file;
        $file = $request->file('file');

        if($image != '')
        {
            $request->validate([
                'name' => 'required',
                'text' => 'required',
                'location' => 'required',
                'year' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        elseif($file != '')
        {
            $request->validate([
                'name' => 'required',
                'text' => 'required',
                'location' => 'required',
                'year' => 'required',
                'file' => 'required|mimes:doc,docx,pdf,xls'
            ]);

            $fileName = $file->getClientOriginalName();
            $file->move(public_path('files'), $fileName);
        }
        else
        {
            $request->validate([
                'name' => 'required',
                'text' => 'required',
                'location' => 'required',
                'year' => 'required'
            ]);
        }

        $form_data = array(
            'name' => $request->name,
            'text' => $request->text,
            'location' => $request->location,
            'year' => $request->year,
            'image' => $image_name,
            'file' => $fileName
        );

        Apprentice::whereId($id)->update($form_data);
        return redirect('admin/bapprentice')->with('success', 'แก้ไขข้อมูลฝึกงานสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apprentices = Apprentice::find($id);
        if ($apprentices->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $apprentices->image);
            File::delete(public_path() . '\\images\\resize\\' . $apprentices->image);
        }
        File::delete(public_path() . '\\files\\' . $apprentices->file);
        $apprentices->delete();
        return redirect('admin/bapprentice')->with('success', 'ลบข้อมูลฝึกงานสำเร็จ');
    }
}
