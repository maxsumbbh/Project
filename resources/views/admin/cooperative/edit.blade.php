@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bcooperative') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลสหกิจ</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bcooperative.update' , $cooperatives->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $cooperatives->name }}" class="form-control input-lg"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เนื้อหา</label>
                            <div class="col-md-8">
                                <textarea name="text" rows="10" cols="80" value="" class="form-control input-lg">{{ $cooperatives->text }}</textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">สถานที่</label>
                            <div class="col-md-8">
                                <textarea name="location" rows="10" cols="80" value="" class="form-control input-lg">{{ $cooperatives->location }}</textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">ปีการศึกษา</label>
                            <div class="col-md-4">
                                <input type="text" name="year" value="{{ $cooperatives->year }}" onKeyPress="if(this.value.length==4) return false;"/>
                                <br><br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <img src="{{ URL::to('/') }}/images/{{ $cooperatives->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $cooperatives->image }}" />
                                <br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกไฟล์</label>
                            <div class="col-md-8">
                                <input type="file" name="file" />
                                <input type="hidden" name="hidden_file" value="{{ $cooperatives->file }}" />
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
            <br><br><br>
        </div>
    </div>
</div>
<br>
<script src="{{asset('//cdn.ckeditor.com/4.13.1/full/ckeditor.js')}}"></script>
<script>
 CKEDITOR.replace( 'text' );
 CKEDITOR.replace( 'location' );
</script>
@endsection
