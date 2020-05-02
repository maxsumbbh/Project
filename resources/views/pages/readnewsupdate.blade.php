<head> 
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<style>
    h3{
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
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('newsupdate') }}">ประชาสัมพันธ์</a>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <li class="breadcrumb-item">{{ $newsupdate->title }}</li>
    </ol>
  </nav>
</div>
      <div class="content0"> 
    <div class="row">
      <div class="leftcolumn"> 
      <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
            <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
            <div class="w3-modal-content w3-animate-zoom" style="margin-top:70px">
            <img id="img01" style="width:100%">
            </div>
          </div>
          <div style="color:#000000;"><h3>{{ $newsupdate->title }}</h3></div>
        <div class="jumpbotron">
          <img src="{{ URL::to('/') }}/images/{{ $newsupdate->image }}" style="max-width:100%; height:auto; display: block; cursor:pointer;" 
    onclick="onClick(this)" class="w3-hover-opacity"/>
    <br>
          <!-- <p>{{ $newsupdate->title }}</p><br> -->
          <h6>{!! $newsupdate->content !!}</h6>
          </div>
    </div>

    
    </div>
</div>
<br><br><br><br><br><br>


@endsection
