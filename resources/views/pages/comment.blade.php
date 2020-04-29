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
        <h3>| ข้อเสนอแนะ</h3>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
      <div class="content4"> 
        <section>
                    <form action="{{url('/comment')}}" method="POST">
                        {{csrf_field()}}
                        <div class="ccfield-prepend">
                          <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
                          <textarea class="ccformfield" name="comment" rows="8" placeholder="แสดงความคิดเห็น" required></textarea>
                      </div>
                      <div class="ccfield-prepend">
                          <button type="submit" class="form-submit">ตกลง</button>
                      </div>
                    </form> 
        </section>
      </div>


</div>

    </div>
    </div>
    <br>
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