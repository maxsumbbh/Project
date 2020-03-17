@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
            <br>
                <a href="{{ route('admin.bactivities') }}" class="btn btn-default">กลับ</a>
            </div>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลกิจกรรม</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bactivities.update' , $activities->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-4 text-left">หัวข้อ</label>
                            <div class="col-md-8">
                                <input type="text" name="title" value="{{ $activities->title }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">เนื้อหา</label>
                            <div class="col-md-8">
                                <textarea name="content" rows="10" cols="80" value="" class="form-control input-lg">{{ $activities->content }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <img src="{{ URL::to('/') }}/images/{{ $activities->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $activities->image }}" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-right">เลือกรูปภาพกิจกรรม</label>
                            <div class="col-md-8">
                                <input type="file" name="images[]" multiple="">
                                <br><br>
                                @foreach ($activitieImage as $image)
                                <img src="{{ URL::to('/') }}/images/activitie/{{ $image->activitie_id }}/{{ $image->image_path }}" width="150px" height="100px" />
                                <a href="{{ url('/admin/bactivities/destroyimage/'.$image->id)  }}"><i class="fa fa-close"></i></a>
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn btn-primary input-lg" value="ยืนยัน" />
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
