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
                <div class="card-header">แก้ไขข้อมูลโครงงาน</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bapprentice.update' , $apprentices->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $apprentices->name }}" class="form-control input-lg"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เนื้อหา</label>
                            <div class="col-md-8">
                                <textarea name="text" rows="10" cols="80" value="" class="form-control input-lg">{{ $apprentices->text }}</textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">สถานที่</label>
                            <div class="col-md-8">
                                <textarea name="location" rows="10" cols="80" value="" class="form-control input-lg">{{ $apprentices->location }}</textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">ปีการศึกษา</label>
                            <div class="col-md-4">
                                <input type="text" name="year" value="{{ $apprentices->year }}" class="form-control input-lg"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <img src="{{ URL::to('/') }}/images/{{ $apprentices->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $apprentices->image }}" />
                                <br><br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกไฟล์</label>
                            <div class="col-md-8">
                                <input type="file" name="file" />
                                <input type="hidden" name="hidden_file" value="{{ $apprentices->file }}" />
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-12">
                                <input type="submit" name="submit" class="btn btn-success" value="ยืนยัน" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
</div>
<br>
<script src="{{asset('//cdn.ckeditor.com/4.13.1/full/ckeditor.js')}}"></script>
<script>
 CKEDITOR.replace( 'text' );
 CKEDITOR.replace( 'location' );
</script>
@endsection
