@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.blocation') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลสถานทีฝึกประสบการณ์</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.blocation.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อบริษัท</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">รายละเอียด</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="text" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
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
        </div>
        <br><br><br>
    </div>
</div>
@endsection
