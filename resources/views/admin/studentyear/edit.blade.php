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
                <div class="card-header">แก้ไขข้อมูลปีที่เข้าศึกษา</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.bstudentyear.update' , $studentyears->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-12 text-left">พ.ศ.</label>
                            <div class="col-md-4">
                                <input type="text" name="name" value="{{ $studentyears->name }}" class="form-control input-lg"  onKeyPress="if(this.value.length==4) return false;">
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
