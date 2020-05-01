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
      <li class="breadcrumb-item active">แบบฟอร์มงานทะเบียน</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| แบบฟอร์มงานทะเบียน</h2></div>
        <hr>
      <div class="row">
        <table class="table table-striped">
          <tr>
              <th>&nbsp;</th>
              <th>ชื่อไฟล์</th>
              <th>ดาวน์โหลดไฟล์</th>
          </tr>
          @foreach ($forms as $form)
          <tr>
            <td><p class="fa fa-file fa-2x"></p></td>
              <td>{{ $form->name }}</td>
              <td>
              <a href="files/{{ $form->file }}" download="{{ $form->file }}">
                <div style="font-size:20px; color:red; padding-left:40px; padding-top:20px;"><p class="fa fa-file-pdf-o fa-2x"></p></div>
              </a>
              </td>
          </tr>
          @endforeach
      </table>
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
