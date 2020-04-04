@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bmembers') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลคณาจารย์</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bmembers.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อคณาจารย์</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control input-lg" placeholder="กรุณากรอกชื่อบุคลากร"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">ตำแหน่ง</label>
                            <div class="col-md-6">
                            <select class="form-control" name="position_id">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->name }}</option>
                                @endforeach
                            </select>
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
                            <label class="col-md-12 text-left">เบอร์โทรศัพท์</label>
                            <div class="col-md-6">
                                <input type="text" name="tel" class="form-control input-lg" placeholder="กรุณากรอกเบอร์บุคลากร"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-12 text-left">อีเมลล์</label>
                            <div class="col-md-6">
                                <input type="text" name="email" class="form-control input-lg" placeholder="กรุณากรอกอีเมลล์บุคลากร"/>
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
        </div>
    </div>
</div>
@endsection
