<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Location;
use App\Http\Requests\LocationRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class LocationController extends Controller
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
        $locations = Location::paginate(5);
        return view('admin.location.index',[
            'locations'=> $locations
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
        $location = Location::all(['id', 'title']);
        return view('admin.location.create',[
            'locations' => $location   
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
            'image' => 'required|image|max:2048',
            'title' => 'required',
            'text' => 'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'image' => $new_name,
            'title' => $request->title,
            'text' => $request->text
        );

        Location::create($form_data);

        return redirect('admin/blocation')->with('success', 'เพิ่มข้อมูลสถานที่ฝึกประสบการณ์สำเร็จ');
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
        $location = Location::findOrFail($id);
        return view('admin.location.edit', compact('location'));
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

        if($image != '')
        {
            $request->validate([
                'image' => 'required|image|max:2048',
                'title' => 'required',
                'text' => 'required'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'title' => 'required',
                'text' => 'required'
            ]);
        }

        $form_data = array(
            'image' => $image_name,
            'title' => $request->title,
            'text' => $request->text
        );

        Location::whereId($id)->update($form_data);
        return redirect('admin/blocation')->with('success', 'แก้ไขข้อมูลสถานที่ฝึกประสบการณ์สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locations = Location::find($id);
        if ($locations->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $locations->image);
            File::delete(public_path() . '\\images\\resize\\' . $locations->image);
        }
        $locations->delete();
        return redirect('admin/blocation')->with('success', 'ลบข้อมูลสถานที่ฝึกประสบการณ์สำเร็จ');
    }
}
