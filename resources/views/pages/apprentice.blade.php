<head> 
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<style>
    h2{
        font-family: 'Kanit', sans-serif !important;
    }
</style>
@extends('layouts.master')
@extends('layouts.inc_navbar')
    @section('content')
    <div class="body">
      <br><br><br>
      <div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('homee') }}">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">ผลงานโครงงาน</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| ผลงานโครงงาน</h2></div>
    <hr>
      <div class="row">
      <div class="leftcolumn"> 
        <a href="apprenticeimg"><p>รูปภาพผลงานโครงงาน</p></a>
        <b>* สามารถค้นหาปีการศึกษาใน Search</b>
        <div class="row">
              <div class="panel panel-default">
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                              <thead>
                                  <tr>
                                      <th></th>
                                      <th>{{ trans('ชื่อผู้จัดทำ') }}</th>
                                      <th>{{ trans('รายละเอียด') }}</th>
                                      <th>{{ trans('สถานที่ประกอบการ') }}</th>
                                      <th>{{ trans('ปีการศึกษา') }}</th> 
                                      <th>{{ trans('ดาวน์โหลดไฟล์') }}</th>
                                      <th>&nbsp;</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($apprentices as $key => $apprentice)
                                      <tr data-entry-id="{{ $apprentice->id }}">
                                          <td><p class="fa fa-file-pdf-o fa-2x"></p></td>
                                          <td>{{ $apprentice->name }}</td>
                                          <td>{!! $apprentice->text !!}</td>
                                          <td>{!! $apprentice->location !!}</td>
                                          <td>{{ $apprentice->year }}</td>
                                          <td><a href="files/{{ $apprentice->file }}" download="{{ $apprentice->file }}">
                                              <p>{{ $apprentice->file }}</p></td>
                                          <td></td>
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
    </div>
<script>
  (function() {
  var $grid = $('.grid').imagesLoaded(function() {
    $('.site__wrapper').masonry({
      itemSelector: '.grid'
    });
  });
})();
</script>
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

