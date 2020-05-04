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
      <li class="breadcrumb-item active">ติดต่อเรา</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>ติดต่อเรา</h2></div>
    <hr>
      <div class="row">
      <div class="leftcolumn"> 
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 250px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.6137710510397!2d100.50031111477917!3d13.741817890354005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2991baa8ccdf1%3A0xafff18267f1cfdce!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lij4Liy4LiK4Lih4LiH4LiE4Lil4Lij4Lix4LiV4LiZ4LmC4LiB4Liq4Li04LiZ4LiX4Lij4LmMIOC4muC4nuC4tOC4leC4o-C4nuC4tOC4oeC4uOC4giDguIjguLHguIHguKPguKfguKPguKPguJTguLQ!5e0!3m2!1sth!2sth!4v1576920288623!5m2!1sth!2sth" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div><br>
        <h4>สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</h4>
        <h4>คณะบริหารธุรกิจ มหาวิทยาลัยเทคโนโลยีราชมงคล บพิตรพิมุข จักรวรรดิ</h4>
        <br>
        <div style="color:#000000;"><h5>ที่อยู่</h5></div>
        <p>264 ถนนจักรวรรดิ แขวงจักรวรรดิ เขตสัมพันธวงศ์ กรุงเทพฯ 10100<br>
          โทร : 0-2222-2814 ต่อ 5319,5330,5350<br>
          โทรสาร : 0-2222-2814 ต่อ 5331
        </p>
        <div style="color:#000000;"><h5>การเดินทาง</h5></div>
        
          <div class="fa fa-subway" style="font-size: 20px;"> MRT : สถานีสามยอด</div><br><br>
          <div class="fa fa-bus" style="font-size: 20px;">รถเมล์ : 4 , 7 , 9 , 40 , 43 , 49 , 56 , 73 , 85</div>
        
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