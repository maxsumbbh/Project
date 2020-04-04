@extends('layouts.master')
@extends('layouts.inc_navbar')
@section('content')
<div class="body">
  <div class="container" >
  <br><br>
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

  <div class="content">
  <div id="services" class="container text-center content ">
    <br>
    <div class="row">
    
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <a href="newsupdate"><span class="fa fa-newspaper-o fa-2x "></span>
      <h5 style="color: #000000">ประชาสัมพันธ์</h5></a>

     </div>
     <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <a href="activities"><span class="fa fa-thumb-tack fa-2x"></span>
      <h5 style="color: #000000" >กิจกรรม</h5></a>
     </div>

     <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <a href="coursegenaral"><span class="fa fa-graduation-cap	 fa-2x"></span>
      <h5 style="color: #000000">หลักสูตรทั่วไป</h5></a>
     </div>
    </div>
    <br>
    <div class="row slideanim">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <a href="form"><span class="fa fa-file-o fa-2x"></span>
      <h5 style="color: #000000">แบบฟอร์ม</h5></a>
     
     </div>
     <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <a href="tact"><span class="fa fa-volume-control-phone fa-2x"></span>
      <h5 style="color: #000000">ติดต่อเรา</h5></a>
      
     </div>
     <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
      <a href="comment"><span class="fa fa-comments-o fa-2x"></span>
      <h5 style="color: #000000">แสดงความคิดเห็น</h5></a>
      </div>
      </div>
     </div>
   <!-- Contact Section -->
   <br>
</div>
<div class="content1">
  <div class=""><h3>| ประชาสัมพันธ์</h3></div>
  <br>
  <div class="row">
    @foreach ($newsupdatess as $newsupdate)
    <div class="col-sm-4 col-md-6 col-lg-4 col-xs-4">
    <!-- <div class=""> -->
      <div class="newsupdate-responsive">
      <div class="card-wrapper">
        <div class="thumbnail-container">
          <a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}">
            <img src="{{ asset('images/'.$newsupdate->image) }}" style="width:280px; height:280px;">
          </a>
        </div>
        <div class="card-desc-wrapper">
          <div class="card-desc-container">
            <div class="card-desc-cont">
                <!-- <div class="card-desc-header"><a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}">{{ $newsupdate->title }}</a></div> -->
                  <div class="card-desc-desc app"><h6>{!! $newsupdate->content !!}</h6></div>
            </div>
                <div class="card-desc-tag">{{ $newsupdate->title }}</div>
          </div>
          </div>
      </div>
      </div>
      </div>
    <!-- </div> -->
    @endforeach
</div>
</div>
<div class="content2">
  <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
         <div class=""><h3>| เกี่ยวกับสาขา</h3></div>
      <br>
         <div class="">
        @foreach ($abouts as $about)
        <div class="indent2">
          <p>{!! $about->text !!}</p>  
         </div>
      @endforeach
      </div>
      </div>
      </div>
    </div>
<div class="content1">
  <div class=""><h3>| กิจกรรม</h3></div>
  <br>
  <div class="row">
    @foreach ($activities as $activitie)
    <div class="col-sm-4 col-md-6 col-lg-4 col-xs-4">
    <div class="activities-responsive">
      <div class="card-wrapper">
        <div class="thumbnail-container">
          <a href="{{ url('/activities/show/'.$activitie->id)  }}">
            <img src="{{ asset('images/'.$activitie->image) }}" style="width:280px; height:280px;">
          </a>
        </div>
        <div class="card-desc-wrapper">
          <div class="card-desc-container">
            <div class="card-desc-cont">
                <!-- <div class="card-desc-header"><a href="{{ url('/activities/show/'.$activitie->id)  }}">{{ $activitie->title }}</a></div> -->
                   <div class="card-desc-desc app"><h6>{!! $activitie->content !!}</h6></div>
            </div>
                <div class="card-desc-tag">{{ $activitie->title }}</div>
          </div>
          </div>
      </div>
    </div>
  </div>
    @endforeach
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
