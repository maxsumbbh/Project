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
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('category') }}">ข้อมูลหลักสูตร</a>
         <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">รายละเอียดข้อมูลหลักสูตร</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>| รายละเอียดข้อมูลหลักสูตร</h3>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
         <p>{{ $subgroup->name }} {{ $subgroup->credit }}</p>
   @foreach ($subjects as $subject)
   <div class="accrodion">
       <div class="header">
        <a>{{ $subject->subcode }}
           &nbsp; {{ $subject->name }} &nbsp; {{ $subject->credit }}<br></a>    
       </div>    
          <div class="body">
           {!! $subject->text !!}
           </div>
       </div>
       @endforeach
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