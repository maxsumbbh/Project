@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนปีที่เข้าศึกษา</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bstudentyear.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลปีที่เข้าศึกษา</a>
            </div>
            <br>
            
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>พ.ศ.</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th> 
                        </tr>
                        @foreach ($studentyears as $studentyear)
                        <tr>
                            <td>{{ $studentyear->name }}</td>
                            <td>
                                <a href="{{ route('admin.bstudentyear.edit' , $studentyear->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bstudentyear.destroy', $studentyear->id) }}" method="POST">
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
