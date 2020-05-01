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
      <li class="breadcrumb-item active">ข้อเสนอแนะ</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| ข้อเสนอแนะ</h2></div>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
      <div class="content4"> 
        <section>
                    <form action="{{url('/comment')}}" method="POST">
                        {{csrf_field()}}
                        <div class="ccfield-prepend">
                          <div style="text-align:left; font-size:40px;"><span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span></div><br>
                          <textarea class="ccformfield" name="comment" rows="8" placeholder="แสดงความคิดเห็น" required></textarea>
                      </div>
                      <div class="ccfield-prepend">
                          <button onclick="return confirm('คุณต้องการที่จะเพิ่มข้อเสนอแนะใช่หรือไม่?');" type="submit" class="btn btn-primary">ตกลง</button>
                      </div>
                    </form> 
        </section>
      </div>
      @guest
      @if (Route::has('cooperative'))
      @endif
      @else
      <div class="content4">
        @forelse ($comments as $comment)
        <div class="">
          <div class="w3-card-4 w3-margin w3-white">
            <div class="w3-container">
            <br>
              <h5>ความคิดเห็น</h5>
            </div>
            <div class="w3-container">
              <p>{{$comment->comment}}</p>
            </div>
          </div>
          <hr>
        </div>
        @empty
        <h4>No Comments</h4>
        @endforelse
      </div>
      @endguest
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