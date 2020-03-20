@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bcategory') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>
            <div class="card">
                <div class="card-header">แก้ไขข้อมูลหมวดวิชา</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bcategory.update' , $categorys->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อหมวด</label>
                            <div class="col-md-8">
                                <textarea name="name" rows="10" cols="80" value="" class="form-control input-lg">{{ $categorys->name }}</textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">จำนวนหน่วยกิต</label>
                            <div class="col-md-4">
                                <input type="text" name="credit" value="{{ $categorys->credit }}" class="form-control input-lg"/>
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
@endsection
