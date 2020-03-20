@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div aligh="right">
                <a href="{{ route('admin.bsubgroup') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">เพิ่มข้อมูลปีที่เข้าศึกษา</div>

                <div class="card-body">
                    {!! Form::open(array('url'=>'admin/bstudentyear','files'=>true)) !!}
                        <div class="col-md-4">
                            <div class="form-group">
                            <?= Form::label('name','พ.ศ.'); ?>
                            <?= Form::text('name', null,['class'=>'form-control','placeholder'=>'ระบุข้อมูลปีที่เข้าศึกษา']); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <?= Form::submit('บันทึก',['class'=>'btn btn-success']); ?>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
