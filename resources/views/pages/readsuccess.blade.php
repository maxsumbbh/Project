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
  <li class="breadcrumb-item"><a class="black-text" href="{{ route('success') }}">ความสำเร็จ</a>
    <i class="fa fa-angle-right" aria-hidden="true"></i>
    <li class="breadcrumb-item">{{ $success->name }}</li>
</ol>
</nav>
</div>
  <div class="content0"> 
<div class="row">
  <div class="leftcolumn"> 
    <h3>{{ $success->name }}</h3><br>
    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
            <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
            <div class="w3-modal-content w3-animate-zoom">
            <img id="img01" style="width:100%; height:auto;">
            </div>
          </div>
    <div class="jumpbotron">
      <img src="{{ URL::to('/') }}/images/{{ $success->image }}" style="max-width:100%; height:auto; display: block; cursor:pointer;" 
    onclick="onClick(this)" class="w3-hover-opacity"/>
      <br><br>
      <!-- <p>{{ $success->name }}</p><br> -->
      <p>{!! $success->text !!}</p><br>
      </div>
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
<!-- Posts -->
</div>

</div>
</div>
<br><br><br><br><br><br>

@endsection
