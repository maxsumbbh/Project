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
        <h3>| แบบฟอร์มงานทะเบียน</h3>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
        <table class="table table-striped">
          <tr>
              <th>&nbsp;</th>
              <th>ชื่อไฟล์</th>
              <th>ดาวน์โหลดไฟล์</th>
          </tr>
          @foreach ($forms as $form)
          <tr>
            <td><p class="fa fa-file-pdf-o fa-2x"></p></td>
              <td>{{ $form->name }}</td>
              <td>
              <a href="files/{{ $form->file }}" download="{{ $form->file }}">
              <p>ดาวน์โหลดไฟล์</p>
              </a>
              </td>
          </tr>
          @endforeach
      </table>
</div>
<div class="rightcolumn">
  <div class=" w3-margin">
  <div class="w3-container w3-padding w3">
    <h5>หน่วยงานภายใน</h5>
  </div>
  <ul class="w3-ul w3-hoverable">
    <li class="w3-padding-5">
      <a href="https://bua.rmutr.ac.th/"target="_blank">คณะบริหารธุรกิจ</a>
    </li>
    <li class="w3-padding-5">
      <a href="https://reg.rmutr.ac.th/registrar/home.asp"target="_blank">งานทะเบียน</a>
    </li>
    </li>
    <li class="w3-padding-5">
      <a href="https://th-th.facebook.com/pages/category/College---University/งานกองทุนฯ-บพิตรพิมุข-จักรวรรดิ-858180540866398/"target="_blank">ระบบงานกองทุน</a>
    </li>
    </li>
    <li class="w3-padding-5">
      <a href="https://th-th.facebook.com/งานทะเบียนและฐานข้อมูล-บพิตรพิมุข-จักรวรรดิ-576140065834581/"target="_blank">ระบบฐานข้อมูล</a>
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
      <a href="https://th-th.facebook.com/งานทะเบียนและฐานข้อมูล-บพิตรพิมุข-จักรวรรดิ-576140065834581/">ความสำเร็จ</a>
    </li>
  </ul>
  </div>
  <br><br><br><br><br><br>
  <!-- Posts -->
  <!-- <div class="w3-white w3-margin">
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
  </div> -->

</div>
{!! $forms->render() !!}
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
