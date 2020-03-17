@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div aligh="right">
            <br>
                <a href="{{ route('admin.bmembers') }}" class="btn btn-default">กลับ</a>
            </div>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลบุคลากร</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bmembers.update' , $members->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-4 text-left">ชื่อบุคลากร</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{ $members->name }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">ตำแหน่ง</label>
                            <div class="col-md-8">
                            <select class="form-control" name="position_id">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">เลือกรูปภาพ</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
                                <img src="{{ URL::to('/') }}/images/{{ $members->image }}" class="img-thumbnail" width="100" />
                                <input type="hidden" name="hidden_image" value="{{ $members->image }}" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">เบอร์โทรศัพท์</label>
                            <div class="col-md-8">
                                <input type="text" name="tel" value="{{ $members->tel }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 text-left">อีเมลล์</label>
                            <div class="col-md-8">
                                <input type="text" name="email" value="{{ $members->email }}" class="form-control input-lg"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                             <div class="col-md-10">
                                <input type="submit" name="submit" class="btn btn-primary input-lg" value="ยืนยัน" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
