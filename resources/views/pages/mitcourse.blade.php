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
      <li class="breadcrumb-item active">หลักสูตรวิชาการจัดการสารสนเทศ</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>| หลักสูตรวิชาการจัดการสารสนเทศ</h3>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 

        @foreach ($mitcourses as $mitcourse)
        <p>{!! $mitcourse->text !!}</p>  
    @endforeach
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