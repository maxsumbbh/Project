<head> 
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<style>
    h2{
        font-family: 'Kanit' !important;
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
      <li class="breadcrumb-item active">หลักสูตรเทคโนโลยีสารสนเทศ-การพัฒนาซอฟต์แวร์</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| หลักสูตรเทคโนโลยีสารสนเทศ-การพัฒนาซอฟต์แวร์</h2></div>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
        @foreach ($bitcourses as $bitcourse)
        <p>{!! $bitcourse->text !!}</p>
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