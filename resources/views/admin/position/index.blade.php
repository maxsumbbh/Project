@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนตำแหน่งคณาจารย์</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bposition.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลตำแหน่งคณาจารย์</a>
            </div>
            <br>
            
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ตำแหน่ง</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th> 
                        </tr>
                        @foreach ($positions as $position)
                        <tr>
                            <td>{{ $position->name }}</td>
                            <td>
                                <a href="{{ route('admin.bposition.edit' , $position->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bposition.destroy', $position->id) }}" method="POST">
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
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
