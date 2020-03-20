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
                <div class="card-header">แก้ไขข้อมูลรุ่น</div>
                <div class="card-body"></div>
                    <?= Form::model($studentyears,array('url'=>'admin/bstudentyear/'.$studentyears->id,'method'=>'put')) ?>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?= Form::label('name','รุ่น'); ?>
                            <?= Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ชื่อรุ่น']); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <?= Form::submit('บันทึก',['class'=>'btn btn-primary']); ?>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
