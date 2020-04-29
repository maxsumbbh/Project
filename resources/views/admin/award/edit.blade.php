@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.baward') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลรางวัล</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.baward.update' , $award->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-12 text-left">หัวข้อ</label>
                            <div class="col-md-8">
                                <input type="text" name="title" value="{{ $award->title }}" class="form-control input-lg"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เนื้อหา</label>
                            <div class="col-md-8">
                                <textarea name="content" rows="10" cols="80" value="" class="form-control input-lg">{{ $award->content }}</textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <img src="{{ URL::to('/') }}/images/{{ $award->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $award->image }}" />
                                <br><br>
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
@endsection
