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
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('category') }}">ข้อมูลหลักสูตร</a>
         <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">รายละเอียดข้อมูลหลักสูตร</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| รายละเอียดข้อมูลหลักสูตร</h2></div>
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