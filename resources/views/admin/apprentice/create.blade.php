@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bapprentice') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลโครงงาน</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bapprentice.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control input-lg" placeholder="กรุณากรอกชื่อฝึกงาน"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เนื้อหา</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="text" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">สถานที่</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="location" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">ปีการศึกษา</label>
                            <div class="col-md-4">
                                <input type="text" name="year" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"/>
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
<br><br>
<script src="{{asset('//cdn.ckeditor.com/4.13.1/full/ckeditor.js')}}"></script>
<script>
 CKEDITOR.replace( 'text' );
 CKEDITOR.replace( 'location' );
</script>
@endsection
