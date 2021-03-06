@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bsubject') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลวิชา</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bsubject.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-12 text-left">รหัสวิชา</label>
                            <div class="col-md-6">
                                <input type="text" name="subcode" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อวิชา</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="name" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">จำนวนหน่วยกิต</label>
                            <div class="col-md-4">
                                <input type="text" name="credit" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">กลุ่มวิชา</label>
                            <div class="col-md-6">
                            <select class="form-control" name="subgroup_id">
                                @foreach ($subgroups as $subgroup)
                                    <option value="{{ $subgroup->id }}">{{ $subgroup->name }}</option>
                                @endforeach
                            </select>
                            <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">รายละเอียด</label>
                            <div class="col-md-8">
                                <textarea rows="10" cols="80" name="text" class="form-control input-lg" placeholder="กรุณากรอกข้อมูล"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-12">
                            <br>
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
</script>
@endsection
