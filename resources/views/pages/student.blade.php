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
      <li class="breadcrumb-item active">รายชื่อนักศึกษา</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>| รายชื่อนักศึกษา</h3>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
        <b>* สามารถค้นหาปีการศึกษาใน Search</b>
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
