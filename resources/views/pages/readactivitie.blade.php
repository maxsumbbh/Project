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
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('activities') }}">กิจกรรม</a>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <li class="breadcrumb-item">{{ $activities->title }}</li>
    </ol>
  </nav>
</div>
      <div class="content0"> 
    <div class="row">
      <div class="leftcolumn"> 
      <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
            <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
            <div class="w3-modal-content w3-animate-zoom" style="margin-top:70px">
            <img id="img01" style="width:100%; height:auto;">
            </div>
          </div>
        <h3>{{ $activities->title }}</h3><br>
        <div class="jumpbotron">
          <img src="{{ URL::to('/') }}/images/{{ $activities->image }}" style="max-width:100%; height:auto; display: block; cursor:pointer;" 
    onclick="onClick(this)" class="w3-hover-opacity"/>
    <br>
          <!-- <p>{{ $activities->title }}</p><br> -->
          <p>{!! $activities->content !!}</p>
          <h3>ภาพประกอบ</h3><br>
          <div class="row">
          @foreach ($activitieImage as $image)
          <img src="{{ URL::to('/') }}/images/activitie/{{ $image->activitie_id }}/{{ $image->image_path }}" style="width:220px; height:180px; 
           display: block; cursor:pointer; margin-left: 30px; margin-bottom: 20px;" onclick="onClick(this)" class="w3-hover-opacity"/>
          @endforeach
          </div>
          </div>
    </div>
      

    </div>
</div>
<br><br><br><br><br><br>


@endsection
