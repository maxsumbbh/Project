@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bform') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลแบบฟอร์ม</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bform.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อ</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกไฟล์</label>
                            <div class="col-md-8">
                                <input type="file" name="file" />
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
