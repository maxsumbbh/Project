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
            <h3>| เพิ่ม ลบ แก้ไข ส่วนประชาสัมพันธ์</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bnewsupdate.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลประชาสัมพันธ์</a>
            </div>
            <br>
            
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>หัวข้อ</th>
                            <th>เนื้อหา</th>
                            <!-- <th>วันที่</th> -->
                            <th>รูปภาพ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($newsupdates as $newsupdate)
                        <tr>
                            <td>{{ $newsupdate->title }}</td>
                            <td>{!! $newsupdate->content !!}</td>
                            <!-- <td>{{ $newsupdate->date }}</td> -->
                            <td>
                            <img src="{{ URL::to('/') }}/images/{{ $newsupdate->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>
                                <a href="{{ route('admin.bnewsupdate.edit' , $newsupdate->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bnewsupdate.destroy', $newsupdate->id) }}" method="POST">
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
                    {!! $newsupdates->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
