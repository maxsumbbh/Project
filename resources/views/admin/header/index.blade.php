@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <?= link_to('admin/bheader/create', $title = 'เพิ่มรูปภาพ', ['class' => 'btn btn-success btn-sm'], $secure = null); ?>
            <hr>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รูปภาพ</th>
                            <th>แก้ไข</th>
                        </tr>
                        @foreach ($headers as $header)
                        <tr>
                            <td>
                                <img src="{{ asset('images/'.$header->image) }}" style="width:100px"></a>
                            </td>
                            <td>
                                <a href="{{ route('admin.bheader.edit' , $header->id ) }}" class="btn btn-success">แก้ไข</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                </div>
            </div>

            
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
