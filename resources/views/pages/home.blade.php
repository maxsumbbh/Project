@extends('layouts.master')
@extends('layouts.inc_navbar')
@section('content')
<div class="body">
  <div class="container">
  <br>
  <div class="fakeimg" style="height:2.5%;"></div>
  <div id="carouselExampleControls" id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($slideshows as $slideshow)
      <div class="carousel-item @if($loop->first)active @endif">
      <img class="d-block mx-auto img-fluid" src="{{asset("images/$slideshow->image")}}" width="1110px"   alt="">
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 
    <div class="content0">  
    <div class="row">
    <div class="leftcolumn">
      <h3>เกี่ยวกับสาขา</h3>
      <hr> 
      @foreach ($abouts as $about)
      <div class="indent2">
        <p>{!! $about->text !!}</p>  
       </div>
    @endforeach
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
</div>
<div class="leftcolumn"> 
  <h3>ประชาสัมพันธ์</h3>
  <hr>
  @foreach($newsupdatess as $newsupdate)
  <div class="col-sm-4 col-md-6 col-lg-4 col-xs-4">
  <div class="wrapper1">
    <div class="grid">
      <div class="card-wrapperr">
        <div class="thumbnail-container">
          <a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}"><img src="{{ asset('images/'.$newsupdate->image) }}" class="card-img-top"style="width:220px; height:220px;"></a>
          <div class="card-desc-wrapper">
            <div class="card-desc-container">
              <div class="card-desc-cont">
                <div class="card-desc-desc appp"><a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}"><p>{{ $newsupdate->title }}</p></a></div>
              </div>
                  <div class="card-desc-tag1">ประชาสัมพันธ์</div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  @endforeach
  </div>
<div class="rightcolumn">
<div class=" w3-margin">
  <div class="w3-container w3-padding w3">
    <h5>ข่าวสาร</h5>
  </div>
  <ul class="w3-ul w3-hoverable">
    <li class="w3-padding-5">
      <a href="newsupdate">ประชาสัมพันธ์</a>
    </li>
    <li class="w3-padding-5">
      <a href="activities">กิจกรรม</a>
    </li>
    </li>
    <li class="w3-padding-5">
      <a href="award">รางวัล</a>
    </li>
    </li>
    <li class="w3-padding-5">
      <a href="success">ความสำเร็จ</a>
    </li>
  </ul>
  </div>
</div>

  </div>
    <div class="row">
      <div class="leftcolumn">
        <h3>กิจกรรม</h3>
        <hr> 
      @foreach($activities as $activitie)
      <div class="col-sm-4 col-md-6 col-lg-4 col-xs-4">
      <div class="wrapper1">
        <div class="grid">
          <div class="card-wrapperr">
            <div class="thumbnail-container">
              <a href="{{ url('/activitie/show/'.$activitie->id)  }}"><img src="{{ asset('images/'.$activitie->image) }}" class="card-img-top"style="width:220px; height:220px;"></a>
              <div class="card-desc-wrapper">
                <div class="card-desc-container">
                  <div class="card-desc-cont">
                    <div class="card-desc-desc appp"><a href="{{ url('/activitie/show/'.$activitie->id)  }}"><p>{{ $activitie->title }}</p></a></div>
                  </div>
                      <div class="card-desc-tag1">กิจกรรม</div>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      @endforeach
      </div> 
      </div>
  </div>
  </div>
<script>
  var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


</div>
</div>
</div>
@endsection
