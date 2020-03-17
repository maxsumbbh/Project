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
                <a href="{{ route('admin.bcoursegenaral.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลหลักสูตรทั่วไป</a>
            </div>
            <br>
        <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">หลักสูตรทั่วไป</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>เนื้อหา</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
               
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($coursegenarals as $coursegenaral)
                  <tr>
                    <td>{!! $coursegenaral->text !!}</td>
                            <td>
                                <a href="{{ route('admin.bcoursegenaral.edit' , $coursegenaral->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bcoursegenaral.destroy', $coursegenaral->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a onclick="return confirm('คุณต้องการที่จะลบใช่หรือไม่?');">
                                    <button type="submit" class="btn btn-danger">ลบ</button></a>
                                </form>
                            </td>
                  </tr>
                  @endforeach
                  </tbody>
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
    
</div>
@endsection
