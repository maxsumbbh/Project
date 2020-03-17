@extends('layouts.admin')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>

            <div aligh="right">
                <a href="{{ route('admin.bsubgroup.create') }}" class="btn btn-success btn-sm">เพิ่มข้อมูลกลุ่มวิชา</a>
            </div>

            <hr>
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>ชื่อกลุ่มวิชา</th>
                            <th>จำนวนหน่วยกิต</th>
                            <th>หมวดวิชา</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($subgroups as $subgroup)
                        <tr>
                            <td>{{ $subgroup->name }}</td>
                            <td>{{ $subgroup->credit }}</td>
                            <td>{{ $subgroup->category->name }}</td>
                            <td>
                                <a href="{{ route('admin.bsubgroup.edit' , $subgroup->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.bsubgroup.destroy', $subgroup->id) }}" method="POST">
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
                    {!! $subgroups->render() !!}
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
