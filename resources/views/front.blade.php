@extends('layouts.master')

    @section('content')
    <div class="body">
      <br><br><br><br><br>
      <div class="container">
 <nav aria-label="breadcrumb">
    <ol class="breadcrumb blue-grey lighten-4">
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('homepage') }}">หน้าหลัก</a>
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
        {{-- <form action="{{url('/comment')}}" method="POST">
            {{csrf_field()}}
             
            <div class="from-group">
            <label for="comment">Write comment</label>
            <input class="from-control" name="comment" placeholder="Write comment" type="text">
            </div>
            <input class="btn btn-primary" type="submit" value="Done">
        
        </form> --}}
        
        <br>
        <h5>List of Comments</h5>
        <hr>
        <ol>
        @forelse ($comments as $comment)
            <li class="lead"><p>{{$comment->comment}}</p></li>
        @empty
            <h4>No Comments</h4>
        @endforelse
        </ol>
       <br>
        <section>
            <div class="container">
                <div class="container-content">
                    <div class="container-header">
                        <h5 class="container-header-text">กล่องแสดงความคิดเห็น</h5>
                    </div>
                    <form action="{{url('/comment')}}" method="POST">
                        {{csrf_field()}}
                        <br><br><br>
                        <textarea placeholder="Message" name="comment" class="form-textarea"></textarea><br>
                        <button type="submit" class="form-submit">Submit</button>
                    </form>
                </div>
            </div>
        </section>
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
    {{-- @foreach ($awardss as $award)
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="{{ asset('images/'.$award->image) }}" alt="Image" class="w3-left w3-margin-right" style="width:110px">
        <br><br><br><br>
        <a href="{{ url('/award/show/'.$award->id)  }}"><p class="w3-large">{{ $award->title }}</p></a>
      </li>
    </ul>
    @endforeach --}}
  </div>
  </div>

</div>
{{-- {!! $forms->render() !!} --}}
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



