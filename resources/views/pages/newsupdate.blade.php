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
      <li class="breadcrumb-item active">ประชาสัมพันธ์</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>ประชาสัมพันธ์</h3>
    <hr>
      <div class="row">
      <div class="leftcolumn"> 
      @foreach($newsupdates as $newsupdate)
      <div class="wrapper1">
        <div class="grid">
          <div class="card-wrapperr">
            <div class="thumbnail-container">
              <a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}"><img src="{{ asset('images/'.$newsupdate->image) }}" class="card-img-top"></a>
              <div class="card-desc-wrapper">
                <div class="card-desc-container">
                  <div class="card-desc-cont">
                    <div class="card-desc-desc appp"><a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}"><p>{!! $newsupdate->title !!}</p></a></div>
                  </div>
                      <div class="card-desc-tag1">ประชาสัมพันธ์</div>
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
      <a href="https://th-th.facebook.com/งานทะเบียนและฐานข้อมูล-บพิตรพิมุข-จักรวรรดิ-576140065834581/">ความสำเร็จของศิษย์เก่า</a>
    </li>
  </ul>
  </div>
  <!-- Posts -->
  <div class="w3-white w3-margin">
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
  </div>

</div>
{!! $newsupdates->render() !!}
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
