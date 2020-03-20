@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bsubgroup') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลกลุ่มวิชา</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bsubgroup.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-12 text-left">ชื่อกลุ่มวิชา</label>
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
                            <label class="col-md-12 text-left">หมวดวิชา</label>
                            <div class="col-md-6">
                            <select class="form-control" name="category_id">
                                @foreach ($categorys as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
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
@endsection
