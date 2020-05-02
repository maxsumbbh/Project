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
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('cooperative') }}">ผลงานสหกิจศึกษา</a>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">รูปผลงานสหกิจ</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| รูปผลงานสหกิจ</h2></div>
    <hr>
      <div class="row">
      
        @foreach($cooperatives as $cooperative)           

          <img src="{{ URL::to('/') }}/images/{{ $cooperative->image }}"style="width:220px; height:180px;
          cursor:pointer; margin-left: 100px; margin-bottom: 20px;" onclick="onClick(this)" class="w3-hover-opacity">

          @endforeach  
</div>
<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                <div class="w3-modal-content w3-animate-zoom" style="margin-top:70px">
                <img id="img01" style="width:100%; height:auto;">
            </div>
  

{!! $cooperatives->render() !!}
    </div>
    </div>
    <br><br><br>
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
