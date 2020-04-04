<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Student;
use App\Studentyear;
use App\Http\Requests\StudentRequest;
use Intervention\Image\Facades\Image;
use illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;

class StudentController extends Controller
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
        $students = Student::with('studentyear')->orderBy('studentyear_id','desc')->paginate(5);
        return view('admin.student.index',[
            'students'=> $students
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
        $studentyear = Studentyear::all(['id', 'name']);
        return view('admin.student.create',[
            'studentyears' => $studentyear
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
            'studentcode' => 'required',
            'name' => 'required',
            'studentyear_id' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'studentcode' => $request->studentcode,
            'name' => $request->name,
            'studentyear_id' => $request->studentyear_id,
            'image' => $new_name
        );

        Student::create($form_data);

        return redirect('admin/bstudent')->with('success', 'เพิ่มนักศึกษาสำเร็จ');
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
        $studentyears = Studentyear::all(['id', 'name']);
        $student = Student::findOrFail($id);
        return view('admin.student.edit', compact('student','studentyears'));
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
                'studentcode' => 'required',
                'name' => 'required',
                'studentyear_id' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'studentcode' => 'required',
                'name' => 'required',
                'studentyear_id' => 'required'
            ]);
        }

        $form_data = array(
            'studentcode' => $request->studentcode,
            'name' => $request->name,
            'studentyear_id' => $request->studentyear_id,
            'image' => $image_name
        );

        Student::whereId($id)->update($form_data);
        return redirect('admin/bstudent')->with('success', 'แก้ไขข้อมูลนักศึกษาสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::find($id);
        if ($students->image != 'nopic.png') {
            File::delete(public_path() . '\\images\\' . $students->image);
            File::delete(public_path() . '\\images\\resize\\' . $students->image);
        }
        $students->delete();
        return redirect('admin/bstudent')->with('success', 'ลบข้อมูลนักศึกษาสำเร็จ');
    }
}
