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
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('homepage') }}">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">รายชื่อนักศึกษา</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| รายชื่อนักศึกษา</h2></div>
        <hr>
      <div class="row">
        <b>* สามารถค้นหาปีการศึกษาใน Search</b>
        <div class="row">
              <div class="panel panel-default">      
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class=" table table-bordered table-stripedtable table-bordered table-striped table-hover datatable datatable-User" style=" width: 100%!important;">
                              <thead>
                                  <tr>
                                      <th></th>
                                      <th>{{ trans('รหัสนักศึกษา') }}</th>
                                      <th>{{ trans('ชื่อ-นามสกุล') }}</th>
                                      <th>{{ trans('ปีการศึกษา') }}</th>
                                      <th>{{ trans('รูปภาพ') }}</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($students as $key => $student)
                                      <tr data-entry-id="{{ $student->id }}">   
                                          <td></td>
                                          <td>{{ $student->studentcode }}</td>
                                          <td>{{ $student->name }}</td>
                                          <td>{{ $student->studentyear->name }}</td>
                                          <td> <img src="{{ URL::to('/') }}/images/{{ $student->image }}"
                                              onclick="onClick(this)" class="w3-hover-opacity"style="width:100px; cursor:pointer;">
                                          </td>
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
             <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                                  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                                  <div class="w3-modal-content w3-animate-zoom" style="margin-top:70px">
                                  <img id="img01" style="width:100%; height:auto';">
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
