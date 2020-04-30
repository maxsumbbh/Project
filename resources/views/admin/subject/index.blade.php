<head> 
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<style>
    h3{
        font-family: 'Kanit' !important;
    }
</style>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนวิชา</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bsubject.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลวิชา</a>
            </div>
            <br>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รหัสวิชา</th>
                            <th>ชื่อวิชา</th>
                            <th>จำนวนหน่วยกิต</th>
                            <th>กลุ่มวิชา</th>
                            <th>รายละเอียด</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->subcode }}</td>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->credit }}</td>
                            <td>{{ $subject->subgroup->name }}</td>
                            <td>{!! $subject->text !!}</td>
                            <td>
                                <a href="{{ route('admin.bsubject.edit' , $subject->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bsubject.destroy', $subject->id) }}" method="POST">
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
                    {!! $subjects->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
