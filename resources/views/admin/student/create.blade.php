@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bstudent') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลนักศึกษา</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bstudent.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-12 text-left">รหัสนักศึกษา</label>
                            <div class="col-md-6">
                                <input type="number" name="id" class="form-control input-lg" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" placeholder="กรุณากรอกรหัสนักศึกษา"/>
                            <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control input-lg" placeholder="กรุณากรอกชื่อนักศึกษา"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">รุ่น</label>
                            <div class="col-md-4">
                            <select class="form-control" name="studentyear_id">
                                @foreach ($studentyears as $studentyear)
                                    <option value="{{ $studentyear->id }}">{{ $studentyear->name }}</option>
                                @endforeach
                            </select>
                            <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-12">
                                <input type="submit" name="submit" class="btn btn-success" value="เพิ่มข้อมูล" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</div>
@endsection
