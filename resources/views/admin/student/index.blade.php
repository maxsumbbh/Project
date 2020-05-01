<head> 
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<style>
    h3{
        font-family: 'Kanit' !important;
    }
</style>
@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <h3>| เพิ่ม ลบ แก้ไข ส่วนรายชื่อนักศึกษา</h3>
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.bstudent.create') }}">
                        {{ trans('เพิ่มข้อมูลนักศึกษา') }} 
                    </a>
             
                </div>
            </div>
            <div class="panel panel-default">
     
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                            <thead>
                                <tr>
                    
                                    <th>
                                        {{ trans('รหัสนักศึกษา') }}
                                    </th>
                                    <th>
                                        {{ trans('ชื่อ-นามสกุล') }}
                                    </th>
                                    <th>
                                        {{ trans('ปีการศึกษา') }}
                                    </th>
                                    <th>
                                        {{ trans('รูปภาพ') }}
                                    </th>
                                    <th>
                                        {{ trans('แก้ไข') }}
                                    </th>
                                    <th>
                                        {{ trans('ลบ') }}
                                    </th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $key => $student)
                                    <tr data-entry-id="{{ $student->id }}">
                                 
                                        <td>
                                            {{ $student->studentcode }}
                                        </td>
                                        <td>
                                            {{ $student->name }}
                                        </td>
                                        <td>
                                            {{ $student->studentyear->name }}
                                        </td>
                                        <td>
                                            <a href="{{ asset('images/'.$student->image)}}">
                                                <img src="{{ URL::to('/') }}/images/{{ $student->image }}"
                                                class="img-thumbnail" width="75" />  
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.bstudent.edit' , $student->id ) }}" class="btn btn-success">แก้ไข</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.bstudent.destroy', $student->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE') 
                                                <div style="margin-top:15px;"><a onclick="return confirm('คุณต้องการที่จะลบใช่หรือไม่?');">
                                                <button type="submit" class="btn btn-danger">ลบ</button></a></div>
                                            </form>
                                        </td>
                                   
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection



