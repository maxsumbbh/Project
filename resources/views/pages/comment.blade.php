@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br><br><br><br>
      <div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('homee') }}">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">แสดงความคิดเห็น</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>| แสดงความคิดเห็น</h3>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
      <div class="content4"> 
                    <form action="{{url('/comment')}}" method="POST">
                        {{csrf_field()}}
                        <div class="ccfield-prepend">
                          <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
                          <textarea class="ccformfield" name="comment" rows="8" placeholder="แสดงความคิดเห็น" required></textarea>
                      </div>
                      <div class="ccfield-prepend">
                          <input class="ccbtn" type="submit" value="ตกลง">
                      </div>
                    </form> 
      </div>

      <div class="content4">
        @forelse ($comments as $comment)
        <div class="">
          <div class="w3-card-4 w3-margin w3-white">
            <div class="w3-container">
            <br>
              <h5>ความคิดเห็น</h5>
            </div>
            <div class="w3-container">
              <p>{{$comment->comment}}</p>
            </div>
          </div>
          <hr>
        </div>
        @empty
        <h4>No Comments</h4>
        @endforelse
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
    {{-- @foreach ($newsupdatess as $newsupdate)
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="{{ asset('images/'.$newsupdate->image) }}" alt="Image" class="w3-left w3-margin-right" style="width:110px">
        <br><br><br><br>
        <a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}"><p class="w3-large">{{ $newsupdate->title }}</p></a>
      </li>
    </ul>
    @endforeach --}}
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