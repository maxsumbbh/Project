@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนหลักสูตรการจัดการสารสนเทศ</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bmitcourse.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลหลักสูตร</a>
            </div>
            <br>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ข้อมูลหลักสูตร</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($mitcourses as $mitcourse)
                        <tr>
                            <td>{!! $mitcourse->text !!}</td>
                            <td>
                                <a href="{{ route('admin.bmitcourse.edit' , $mitcourse->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bmitcourse.destroy', $mitcourse->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a onclick="return confirm('คุณต้องการที่จะลบใช่หรือไม่?');">
                                    <button type="submit" class="btn btn-danger">ลบ</button></a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    {!! $mitcourses->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
