@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
            <br>
                <a href="{{ route('admin.bnewsupdate') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลประชาสัมพันธ์</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bnewsupdate.update' , $newsupdate->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อ</label>
                            <div class="col-md-8">
                                <input type="text" name="title" value="{{ $newsupdate->title }}" class="form-control input-lg"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เนื้อหา</label>
                            <div class="col-md-8">
                                <textarea name="content" rows="10" cols="80" value="" class="form-control input-lg">{{ $newsupdate->content }}</textarea><br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">ปฏิทิน</label>
                            <div class="col-md-8">
                                <input type="date" id="start" name="date" value="{{ $newsupdate->date }}" min="01-01-2015" max="31-12-3000">
                                <br><br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" /><br>
                                <img src="{{ URL::to('/') }}/images/{{ $newsupdate->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $newsupdate->image }}" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-10">
                            <br>
                                <input type="submit" name="submit" class="btn btn-success " value="ยืนยัน" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</div>
<script src="{{asset('//cdn.ckeditor.com/4.13.1/full/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection
