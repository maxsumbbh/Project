@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนหมวดวิชา</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bcategory.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลหมวดวิชา</a>
            </div>
            <br>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ชื่อหมวด</th>
                            <th>จำนวนหน่วยกิต</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($categorys as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->credit }}</td>
                            <td>
                                <a href="{{ route('admin.bcategory.edit' , $category->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bcategory.destroy', $category->id) }}" method="POST">
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
                    {!! $categorys->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
