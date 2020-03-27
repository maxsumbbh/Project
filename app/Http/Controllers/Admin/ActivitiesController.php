<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Activities;
use App\ActivitieImage;
use App\Http\Requests\ActivitiesRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class ActivitiesController extends Controller
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
        $activitiess = Activities::paginate(10);
        return view('admin.activities.index',[
            'activitiess'=> $activitiess
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
        return view('admin.activities.create');
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
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $activitiess = new Activities();
        $activitiess->title = $request->title;
        $activitiess->content = $request->content;
        $request->hasFile('image');
        $filename = rand() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path() . '/images/', $filename);
        $activitiess->image = $filename;

        $activitiess->save();
        // return redirect()->action('ActivitiesController@index');


        // $image = $request->file('image');
        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $new_name);


        // $form_data = array(
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'image' => $new_name
        // );

        // Activities::create($form_data);

        foreach ($request->file('images') as $image) {
            $activitieImage = new ActivitieImage;
            $name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path().'/images/activitie/' . $activitiess->id , $name);
            $activitieImage->activitie_id = $activitiess->id;
            $activitieImage->image_path = $name;
            $activitieImage->save();
        }

        return redirect('admin/bactivities')->with('success', 'เพิ่มข้อมูลกิจกรรมสำเร็จ');
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
        $activities = Activities::findOrFail($id);
        $activitieImage = ActivitieImage::select('id','activitie_id','image_path')->where('activitie_id', '=', $id)->get();
        return view('admin.activities.edit', compact('activities','activitieImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $image = $request->file('image');
        $images = $request->file('images');

        $activitiess = Activities::find($id);
        $activitiess->title = $request->title;
        $activitiess->content = $request->content;

        if($image != '')
        {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'image' => 'required|image|max:2048'
            ]);
            $filename = rand() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/', $filename);
            $activitiess->image = $filename;
        }
        else
        {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);
        }

        if($images){
            foreach ($images as $image) {
                $activitieImage = new ActivitieImage;
                $name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path().'/images/activitie/' . $activitiess->id , $name);
                $activitieImage->activitie_id = $activitiess->id;
                $activitieImage->image_path = $name;
                $activitieImage->save();
            }
        }

        $activitiess->save();
        return redirect('admin/bactivities')->with('success', 'แก้ไขข้อมูลกิจกรรมสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activitiess = Activities::find($id);
        // $activitieImage = ActivitieImage::select('activitie_id','image_path')->where('activitie_id', '=', $id)->get();
        // $activitieImage = ActivitieImage::all();
        if ($activitiess->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $activitiess->image);
            $activitiess->delete();
        }

        // if ($activitieImage->activitie_id = $activitiess->id) {
        //     $images_path = public_path() . '\\images\\activitie\\' . $activitieImage->activitie_id . '\\' . $activitieImage->image_path;
        //     foreach ($images_path as $images) {
        //         File::delete($images);
        //         $activitieImage->delete();
        //     }
        // }

        return redirect('admin/bactivities')->with('success', 'ลบข้อมูลกิจกรรมสำเร็จ');
    }


    public function destroyImage($id) {
        $activitieImage = ActivitieImage::find($id);
        File::delete(public_path() . '\\images\\activitie\\' . $activitieImage->activitie_id . '\\' . $activitieImage->image_path);
        $activitieImage->delete();
        return redirect('admin/bactivities')->with('success', 'ลบรูปภาพกิจกรรมสำเร็จ');
    }
}
