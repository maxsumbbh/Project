@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <h3>| เพิ่ม ลบ แก้ไข ส่วนตำแหน่งคณาจารย์</h3>
            <br>
            <?= link_to('admin/bposition/create', $title = 'เพิ่มข้อมูลตำแหน่ง', ['class' => 'btn btn-success btn-sm'], $secure = null); ?>
           <br><br>
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
                            <td>{{$position->name}}</td>
                            <td>
                                <a href="{{ url('/admin/bposition/'.$position->id.'/edit') }}" class="btn btn-success">แก้ไข</a>
                            </td>
                            <td> 
                            <a onclick="return confirm('คุณต้องการที่จะลบใช่หรือไม่?');"><?= Form::open(array('url' => 'admin/bposition/' . $position->id, 'method' => 'delete')) ?>
                                <button type="submit" class="btn btn-danger">ลบ</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
