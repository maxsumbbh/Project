
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนแบบฟอร์ม</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bform.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลแบบฟอร์ม</a>
            </div>
            <br>

            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ชื่อ</th>
                            <th>ไฟล์</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($forms as $form)
                        <tr>
                            <td>{{ $form->name }}</td>
                            <td>
                            <a href="files/{{ $form->file }}" download="{{ $form->file }}">
                            <button type="button" class="btn btn-primary">ดาวน์โหลดไฟล์</button>
                            </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.bform.edit' , $form->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bform.destroy', $form->id) }}" method="POST">
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
                    {!! $forms->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
