@extends('layouts.admin')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <br>
    <div aligh="right">
        <a href="{{ route('admin.bmembers.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลบุคลากร</a>
    </div>
    <br>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>ชื่อบุคลากร</th>
                            <th>ตำแหน่ง</th>
                            <th>รูปภาพ</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>อีเมลล์</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
               
                  </tr>
                  </thead>
                  @foreach ($members as $member)
                  <tbody>
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
                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
      {!! $members->render() !!}
</div>
@endsection
