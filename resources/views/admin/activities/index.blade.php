@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนกิจกรรม</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bactivities.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลกิจกรรม</a>
            </div>
            <br>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>หัวข้อ</th>
                            <th>เนื้อหา</th>
                            <th>รูปภาพ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($activitiess as $activities)
                        <tr>
                            <td>{{ $activities->title }}</td>
                            <td>{!! $activities->content !!}</td>
                            <td>
                            <img src="{{ URL::to('/') }}/images/{{ $activities->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>
                                <a href="{{ route('admin.bactivities.edit' , $activities->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bactivities.destroy', $activities->id) }}" method="POST">
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
                    {!! $activitiess->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
