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
      <li class="breadcrumb-item active">สถานที่ฝึกประสบการณ์</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>สถานที่ฝึกประสบการณ์</h3>
    <hr>
      <div class="row">
      <div class="leftcolumn"> 
      @foreach($locations as $location)
      <div class="col-sm-4 col-md-6 col-lg-4 col-xs-4">
       <div class="location-responsive">
          <div class="card-wrapperr">
            <div class="thumbnail-container">
              <a href="{{ url('/location/show/'.$location->id)  }}"><img src="{{ asset('images/'.$location->image) }}" class="card-img-top"></a>
              <div class="card-desc-wrapper">
                <div class="card-desc-container">
                  <div class="card-desc-cont">
                    <div class="card-desc-desc appp"><a href="{{ url('/location/show/'.$location->id)  }}"><p>{!! $location->title !!}</p></a></div>
                  </div>
                      <div class="card-desc-tag1">สถานประกอบการ</div>
                </div>
                </div>
            </div>
          </div>
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
    @foreach ($locationss as $location)
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="{{ asset('images/'.$location->image) }}" alt="Image" class="w3-left w3-margin-right" style="width:110px">
        <br><br><br><br>
        <a href="{{ url('/location/show/'.$location->id)  }}"><p class="w3-large">{{ $location->title }}</p></a>
      </li>
    </ul>
    @endforeach
  </div>
  </div> -->

</div>
{!! $locations->render() !!}
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
