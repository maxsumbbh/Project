@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <br>
        <div aligh="right">
                <a href="{{ route('admin.bheader') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>
         
            <div class="card">
                <div class="card-header">เพิ่มรูปภาพ</div>
                <div class="card-body">
                {!! Form::open(array('url'=>'admin/bheader','files'=>true)) !!}
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('image','รูปภาพ'); !!}<br>
                        <?= Form::file('image',null,['class'=>'form-control']); ?>
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
