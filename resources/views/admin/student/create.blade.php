@extends('layouts.admin')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
            <br>
                <a href="{{ route('admin.bstudent') }}" class="btn btn-default">กลับ</a>
            </div>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลนักศึกษา</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bstudent.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-4 text-left">รหัสนักศึกษา</label>
                            <div class="col-md-8">
                                <input type="number" name="id" class="form-control input-lg" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" placeholder="กรุณากรอกรหัสนักศึกษา"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control input-lg" placeholder="กรุณากรอกชื่อนักศึกษา"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">รุ่น</label>
                            <div class="col-md-8">
                            <select class="form-control" name="studentyear_id">
                                @foreach ($studentyears as $studentyear)
                                    <option value="{{ $studentyear->id }}">{{ $studentyear->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-10">
                                <input type="submit" name="submit" class="btn btn-primary input-lg" value="เพิ่มข้อมูล" />
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
