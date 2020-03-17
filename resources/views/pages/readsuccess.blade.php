
@extends('layouts.master')

@section('content')
<div class="body">
  <br><br><br><br><br>
  <div class="container">
<nav aria-label="breadcrumb">
<ol class="breadcrumb blue-grey lighten-4">
  <li class="breadcrumb-item"><a class="black-text" href="{{ route('homee') }}">หน้าหลัก</a>
  <i class="fa fa-angle-right" aria-hidden="true"></i>
  <li class="breadcrumb-item"><a class="black-text" href="{{ route('success') }}">ความสำเร็จของศิษย์เก่า</a>
    <i class="fa fa-angle-right" aria-hidden="true"></i>
    <li class="breadcrumb-item">{{ $success->name }}</li>
</ol>
</nav>
</div>
  <div class="content0"> 
<div class="row">
  <div class="leftcolumn"> 
    <h3>{{ $success->name }}</h3><br>
    <div class="jumpbotron">
      <img src="{{ URL::to('/') }}/images/{{ $success->image }}" class="img-thumbnail" />
      <br><br>
      <p>{{ $success->name }}</p><br>
      <h6>{!! $success->text !!}</h6><br>
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
</div>

</div>
</div>


@endsection
