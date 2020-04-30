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
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('homee') }}">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">คณาจารย์</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| คณาจารย์</h2></div>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
        @foreach ($members as $member)   
    <!-- <div class="projectsChild"> -->
            <!-- <div class="projectsGrandchild"> -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                      <img class="" src="{{ asset('images/'.$member->image) }}" style="max-width: 100%; height: auto;"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8"><br><p>{{ $member->name }}</p>
                      <p><b>{{ $member->position->name }}</b></p>
                      <p>Tel : {{ $member->tel }}</p>
                      <p>Email : {{ $member->email }}</p><hr width="100%" color="#000000">
                    </div>        
                  </div> 
                  <br>           
                </div>
               
                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  
                </div> -->
             
            <!-- </div> -->
    <!-- </div> -->
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