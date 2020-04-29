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
      <li class="breadcrumb-item active">ความสำเร็จ</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
        <h3>| ความสำเร็จ</h3>
    <hr>
      <div class="row">
      <div class="leftcolumn"> 
      @foreach($success as $success)
      <div class="col-sm-4 col-md-6 col-lg-4 col-xs-4">
        <div class="success-responsive">
          <div class="card-wrapperr">
            <div class="thumbnail-container">
              <a href="{{ url('/success/show/'.$success->id)  }}"><img src="{{ asset('images/'.$success->image) }}"
               class="card-img-top" style="width:220px; height:220px;"></a>
              <div class="card-desc-wrapper">
                <div class="card-desc-container">
                  <div class="card-desc-cont">
                    <div class="card-desc-desc appp"><a href="{{ url('/success/show/'.$success->id)  }}"><p>{{$success->name}}</p></a></div>
                  </div>
                      <div class="card-desc-tag1">ความสำเร็จ</div>
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
