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
      <li class="breadcrumb-item"><a class="black-text" href="{{ route('homepage') }}">หน้าหลัก</a>
      <i class="fa fa-angle-right" aria-hidden="true"></i>
      <li class="breadcrumb-item active">ข้อมูลหลักสูตร</li>
    </ol>
  </nav>
      </div>
      <div class="content0">  
      <div style="color:#000000;"><h2>| ข้อมูลหลักสูตร</h2></div>
        <hr>
      <div class="row">
      <div class="leftcolumn"> 
        @foreach ($categorys as $category)
        <p>{{ $category->name }}
                  {{ $category->credit }}</p>
              
                @foreach ($subgroups as $subgroup)   
                    @if($subgroup->category_id == $category->id)
        
                    <a href="{{ url('/category/show/'.$subgroup->id)  }}">
                     <p style="margin-left:30px;">{{ $subgroup->name }}
                        {{ $subgroup->credit }}</p></a>
                    
                    @endif
                @endforeach
        
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