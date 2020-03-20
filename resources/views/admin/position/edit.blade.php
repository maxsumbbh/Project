@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
        <div aligh="right">
            <br>
                <a href="{{ route('admin.bposition') }}" class="btn btn-default">กลับ</a>
            </div>
            <br>

            <div class="card">
                <div class="card-header">แก้ไขข้อมูลตำแหน่ง</div>
                <div class="card-body">
                    <?= Form::model($positions,array('url'=>'admin/bposition/'.$positions->id,'method'=>'put')) ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= Form::label('name','ตำแหน่ง'); ?>
                            <?= Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ชื่อตำแหน่ง']); ?>
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
