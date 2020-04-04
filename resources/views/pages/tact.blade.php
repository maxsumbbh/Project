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
      <li class="breadcrumb-item active">ติดต่อเรา</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>ติดต่อเรา</h3>
    <hr>
      <div class="row">
      <div class="leftcolumn"> 
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 250px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.6137710510397!2d100.50031111477917!3d13.741817890354005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2991baa8ccdf1%3A0xafff18267f1cfdce!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lij4Liy4LiK4Lih4LiH4LiE4Lil4Lij4Lix4LiV4LiZ4LmC4LiB4Liq4Li04LiZ4LiX4Lij4LmMIOC4muC4nuC4tOC4leC4o-C4nuC4tOC4oeC4uOC4giDguIjguLHguIHguKPguKfguKPguKPguJTguLQ!5e0!3m2!1sth!2sth!4v1576920288623!5m2!1sth!2sth" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div><br>
        <h4>สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</h4>
        <h4>คณะบริหารธุรกิจ มหาวิทยาลัยเทคโนโลยีราชมงคล บพิตรพิมุข จักรวรรดิ</h4>
        <br>
        <p>264 ถนนจักรวรรดิ แขวงจักรวรรดิ เขตสัมพันธวงศ์ กรุงเทพฯ 10100<br>
          โทร : 0-2222-2814 ต่อ 5319,5330,5350<br>
          โทรสาร : 0-2222-2814 ต่อ 5331
        </p>
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
    @foreach ($newsupdatess as $newsupdate)
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="{{ asset('images/'.$newsupdate->image) }}" alt="Image" class="w3-left w3-margin-right" style="width:110px">
        <br><br><br><br>
        <a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}"><p class="w3-large">{{ $newsupdate->title }}</p></a>
      </li>
    </ul>
    @endforeach
  </div>
  </div> -->

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