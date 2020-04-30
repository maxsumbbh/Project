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
            <h3>| เพิ่ม ลบ แก้ไข ส่วนผลงานโครงงาน</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bapprentice.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลโครงงาน</a>
            </div>
            <br>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ชื่อ</th>
                            <th>เนื้อหา</th>
                            <th>สถานที่</th>
                            <th>ปีการศึกษา</th>
                            <th>รูปภาพ</th>
                            <th>ไฟล์</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($apprentices as $apprentice)
                        <tr>
                            <td>{{ $apprentice->name }}</td>
                            <td>{!! $apprentice->text !!}</td>
                            <td>{!! $apprentice->location !!}</td>
                            <td>{{ $apprentice->year }}</td>
                            <td>
                            <img src="{{ URL::to('/') }}/images/{{ $apprentice->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>
                            <a href="files/{{ $apprentice->file }}" download="{{ $apprentice->file }}">
                            <button type="button" class="btn btn-primary">ดาวน์โหลดไฟล์</button>
                            </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.bapprentice.edit' , $apprentice->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bapprentice.destroy', $apprentice->id) }}" method="POST">
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
                    {!! $apprentices->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
