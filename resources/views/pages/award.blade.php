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
      <li class="breadcrumb-item active">รางวัล</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| รางวัล</h2></div>
    <hr>
      <div class="row">
      <div class="leftcolumn0"> 
      @foreach($awards as $award)
      <div class="col-sm-4 col-md-6 col-lg-4 col-xs-4">
        <div class="award-responsive">
          <div class="card-wrapperr">
            <div class="thumbnail-container">
              <a href="{{ url('/award/show/'.$award->id)  }}"><img src="{{ asset('images/'.$award->image) }}" 
              class="card-img-top" style="width:220px; height:220px;"></a>
              <div class="card-desc-wrapper">
                <div class="card-desc-container">
                  <div class="card-desc-cont">
                    <div class="card-desc-desc appp"><a href="{{ url('/award/show/'.$award->id)  }}"><p>{{$award->title}}</p></a></div>
                  </div>
                      <div class="card-desc-tag1">รางวัล</div>
                </div>
              </div>
          </div>
        </div>
      </div>
      </div>
      @endforeach
</div>

{!! $awards->render() !!}
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
