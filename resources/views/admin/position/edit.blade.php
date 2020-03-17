@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-header">แก้ไขข้อมูลตำแหน่ง</div>

                <div class="card-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <?= Form::model($positions,array('url'=>'admin/bposition/'.$positions->id,'method'=>'put')) ?>

                    <div class="col-md-8">
                        <div class="form-group">
                            <?= Form::label('name','ตำแหน่ง'); ?>
                            <?= Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ชื่อตำแหน่ง']); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10">
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
