@extends('layouts.master')
@extends('layouts.inc_navbar')
    @section('content')
    <div class="body">
      <br><br><br><br><br>
      <div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('homee') }}">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">ผลงานสหกิจศึกษา</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>| ผลงานสหกิจศึกษา</h3>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
        <a href="cooperativeimg"><p>รูปภาพผลงานสหกิจศึกษา</p></a>
        <b>* สามารถค้นหาปีการศึกษาใน Search</b>
        <div class="row">
              <div class="panel panel-default">
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-bordered table-striped table-hover datatable datatable-User">
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
                                  @foreach($cooperatives as $key => $cooperative)     
                                      <tr data-entry-id="{{ $cooperative->id }}">                
                                          <td><p class="fa fa-file-pdf-o fa-2x"></p></td>
                                          <td>{{ $cooperative->name }}</td>
                                          <td>{!! $cooperative->text !!}</td>
                                          <td>{!! $cooperative->location !!}</td>
                                          <td>{{ $cooperative->year }}</td>
                                          <td><a href="files/{{ $cooperative->file }}" download="{{ $cooperative->file }}">
                                              <p>{{ $cooperative->file }}</p></td>
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
<div class="rightcolumn">
  <div class=" w3-margin">
  <div class="w3-container w3-padding w3">
    <h5>หน่วยงานภายใน</h5>
  </div>
  <ul class="w3-ul w3-hoverable">
    <li class="w3-padding-5">
      <a href="https://bua.rmutr.ac.th/">คณะบริหารธุรกิจ</a>
    </li>
    <li class="w3-padding-5">
      <a href="https://reg.rmutr.ac.th/registrar/home.asp">งานทะเบียน</a>
    </li>
    </li>
    <li class="w3-padding-5">
      <a href="https://th-th.facebook.com/pages/category/College---University/งานกองทุนฯ-บพิตรพิมุข-จักรวรรดิ-858180540866398/">ระบบงานกองทุน</a>
    </li>
    </li>
    <li class="w3-padding-5">
      <a href="https://th-th.facebook.com/งานทะเบียนและฐานข้อมูล-บพิตรพิมุข-จักรวรรดิ-576140065834581/">ระบบฐานข้อมูล</a>
    </li>
  </ul>
</div>
<br>
  <div class=" w3-margin">
  <div class="w3-container w3-padding w3">
    <h5>ข่าวสาร</h5>
  </div>
  <ul class="w3-ul w3-hoverable">
    <li class="w3-padding-5">
      <a href="newsupdate">ประชาสัมพันธ์</a>
    </li>
    <li class="w3-padding-5">
      <a href="https://reg.rmutr.ac.th/registrar/home.asp">กิจกรรม</a>
    </li>
    </li>
    <li class="w3-padding-5">
      <a href="https://th-th.facebook.com/pages/category/College---University/งานกองทุนฯ-บพิตรพิมุข-จักรวรรดิ-858180540866398/">รางวัล</a>
    </li>
    </li>
    <li class="w3-padding-5">
      <a href="https://th-th.facebook.com/งานทะเบียนและฐานข้อมูล-บพิตรพิมุข-จักรวรรดิ-576140065834581/">ความสำเร็จของศิษย์เก่า</a>
    </li>
  </ul>
  </div>
  <!-- Posts -->
  <div class="w3-white w3-margin">
    <div class="w3-container w3-padding w3">
      <h5>NEWS POSTS</h5>
    </div>
    @foreach ($cooperatives as $cooperative)
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="{{ asset('images/'.$cooperative->image) }}" alt="Image" class="w3-left w3-margin-right" style="width:110px">
        <br><br><br><br>
        <a href="{{ url('/cooperative/show/'.$cooperative->id)  }}"><p class="w3-large">{!! $cooperative->text !!}</p></a>
      </li>
    </ul>
    @endforeach
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

$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@endsection

