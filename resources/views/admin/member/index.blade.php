@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนคณาจารย์</h3>
            <br>
            <div aligh="right">
                <a href="{{ route('admin.bmembers.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลคณาจารย์</a>
            </div>
            <br>

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                    <tr>
                     <th>ชื่อคณาจารย์</th>
                            <th>ตำแหน่ง</th>
                            <th>รูปภาพ</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>อีเมลล์</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
               
                  </tr>
                  @foreach ($members as $member)
               
                  <tr>
                    <td>{{ $member->name }}</td>
                            <td>{{ $member->position->name }}</td>
                            <td>
                            <img src="{{ URL::to('/') }}/images/{{ $member->image }}"
                            class="img-thumbnail" width="75" />
                            </td>
                            <td>{{ $member->tel }}</td>
                            <td>{{ $member->email }}</td>
                            <td>
                                <a href="{{ route('admin.bmembers.edit' , $member->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bmembers.destroy', $member->id) }}" method="POST">
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
                    {!! $members->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
