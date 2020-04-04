@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br><br>
            <div aligh="right">
                <a href="{{ route('admin.babout') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลเกี่ยวกับเรา</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.babout.update' , $about->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-12 text-left">เนื้อหา</label>
                            <div class="col-md-8 ">
                                <textarea name="text" rows="10" cols="80" value="" class="form-control input-lg">{{ $about->text }}</textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-12">
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
<!-- <script src="{{asset('//cdn.ckeditor.com/4.13.1/full/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'text' );
</script> -->
@endsection
