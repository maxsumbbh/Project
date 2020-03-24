@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนผลงานสหกิจศึกษา</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bcooperative.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลสหกิจศึกษา</a>
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
                        @foreach ($cooperatives as $cooperative)
                        <tr>
                            <td>{{ $cooperative->name }}</td>
                            <td>{!! $cooperative->text !!}</td>
                            <td>{!! $cooperative->location !!}</td>
                            <td>{{ $cooperative->year }}</td>
                            <td>
                            <img src="{{ URL::to('/') }}/images/{{ $cooperative->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>
                            <a href="files/{{ $cooperative->file }}" download="{{ $cooperative->file }}">
                            <button type="button" class="btn btn-primary">ดาวน์โหลดไฟล์</button>
                            </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.bcooperative.edit' , $cooperative->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bcooperative.destroy', $cooperative->id) }}" method="POST">
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
                    {!! $cooperatives->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
