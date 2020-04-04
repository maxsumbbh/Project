@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bnewsupdate') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลประชาสัมพันธ์</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bnewsupdate.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-12 text-left">หัวข้อ</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control input-lg" placeholder="กรุณากรอกชื่อสหกิจศึกษา"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เนื้อหา</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="content" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                                <br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 text-left">ปฏิทิน</label>
                            <div class="col-md-8">
                                <input type="date" data-date="" name="date" data-date-format='dd-mm-yy' min="01-01-2015" max="12-01-3000">   
                                <br> <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-12">
                            <br>
                                <input type="submit" name="submit" class="btn btn-success " value="เพิ่มข้อมูล" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
</div>
<br><br>
<script src="{{asset('//cdn.ckeditor.com/4.13.1/full/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection
