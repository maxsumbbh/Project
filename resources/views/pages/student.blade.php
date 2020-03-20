@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br><br><br><br>
      <div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('homee') }}">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">รายชื่อนักศึกษา</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>| รายชื่อนักศึกษา</h3>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
        <div class="row">
          <div class="col-lg-12">
              <div class="panel panel-default">
       
                  <div class="panel-body">
  
                      <div class="table-responsive">
                          <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                              <thead>
                                  <tr>
                                      <th width="10">
  
                                      </th>
                                      <th>
                                        
                                      </th>
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
                                      
                                      </th>
                                      <th>
                                          &nbsp;
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($students as $key => $student)
                                      <tr data-entry-id="{{ $student->id }}">
                                          <td>
  
                                          </td>
                                          <td>
                                             
                                          </td>
                                          <td>
                                            {{ $student->id }}
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
                                         
                                          </td>
                                          <td>
                                        
  
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
    @foreach ($activitiess as $activitie)
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="{{ asset('images/'.$activitie->image) }}" alt="Image" class="w3-left w3-margin-right" style="width:110px">
        <br><br><br><br>
        <a href="{{ url('/activities/show/'.$activitie->id)  }}"><p class="w3-large">{{ $activitie->title }}</p></a>
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

</script>
@endsection
