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
            <h3>| เพิ่ม ลบ แก้ไข ส่วนสถานที่ฝึกประสบการณ์</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.blocation.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลสถานที่ฝึกประสบการณ์</a>
            </div>
            <br>
            
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รูปภาพ</th>
                            <th>ชื่อบริษัท</th>
                            <th>รายละเอียด</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($locations as $location)
                        <tr>
                        <td>
                            <img src="{{ URL::to('/') }}/images/{{ $location->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>{{ $location->title }}</td>
                            <td>{{ $location->text }}</td>
                            <td>
                                <a href="{{ route('admin.blocation.edit' , $location->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.blocation.destroy', $location->id) }}" method="POST">
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
                    {!! $locations->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
