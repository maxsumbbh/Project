@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
            <div aligh="right">
                <a href="{{ route('admin.bstudentyear') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลปีที่เข้าศึกษา</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bstudentyear.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="col-md-12 text-left">พ.ศ.</label>
                            <div class="col-md-4">
                            <input type="number" name="name" class="form-control input-lg" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" placeholder="กรุณากรอกปี"/>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class="form-group text-left">
                            <div class="col-md-12">
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
