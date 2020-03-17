<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</title>
        <link rel="stylesheet" href="{{asset('css/layouts.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        


    </head>
    <body>
    <header>
		<nav id="main-navbar" class="navbar navbar-toggleable-md fixed-top scrolling-navbar navbar-expand-lg navbar-inverse">
			<div class="container navbar-container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            
          <span class="fa fa-navicon" style="color:#fff; font-size:28px;"></span>
					</button>
          <a class="navbar-brand" href=""> <img src="{{ url('/') }}/img/logo.png" width="300px"></a>
				</div>
        <div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
          <li class="{{ Request::path() == 'homee' ? 'active' : '' }}">
							<a class="nav-link" href="{{ route('homee') }}">หน้าหลัก</a>
						</li>
						  <li class="dropdown ">
							<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">หลักสูตร <b class="caret fa fa-caret-down"></b></a>
							<ul class="dropdown-content ">
                <li class="{{ Request::path() == 'category' ? 'active' : '' }}">
								<a class="nav-link" href="{{ route('category') }}">ข้อมูลหลักสูตร</a></li>
							  <li class="{{ Request::path() == 'bitcourse' ? 'active' : '' }}">
								<a class="nav-link" href="{{ route('bitcourse') }}">กลุ่มวิชาการพัฒนาซอฟต์แวร์</a></li>
							  <li class="{{ Request::path() == 'mitcourse' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('mitcourse') }}">กลุ่มวิชาการจัดการเทคโนโลยีสารสนเทศ</a></li>
							</ul>
            </li>
            <li class="{{ Request::path() == 'about' ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('about') }}">คณาจารย์</a></li>
						<li class="dropdown">
							<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">นักศึกษา <b class="caret fa fa-caret-down"></b></a>
							<ul class="dropdown-content ">

   
							  <li class="{{ Request::path() == 'award' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('award') }}">รางวัล</a></li>
            
                <li class="{{ Request::path() == 'success' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('success') }}">ความสำเร็จของศิษย์เก่า</a></li>
                @guest
                @if (Route::has('cooperative'))
                @endif
                @else
                <li class="{{ Request::path() == 'cooperative' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('cooperative') }}">ผลงานสหกิจศึกษา</a></li>
               
                <li class="{{ Request::path() == 'apprentice' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('apprentice') }}">ผลงานฝึกงาน</a></li>
                <li class="{{ Request::path() == 'location' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('location') }}">สถานที่ศึกษานอกพื้นที่</a></li>
                <li class="{{ Request::path() == 'student' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('student') }}">รายชื่อนักศึกษา</a></li>
                @endguest
							</ul>
            </li>
					</ul>
				</div>
				<div class="top-social">
					<ul id="top-social-menu">
            @guest
            <li><a href="login">เข้าสู่ระบบ</a></li>
        
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
             
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">    
                @can('user_access')        
                <a class="dropdown-item" href="admin">{{ __('สำหรับผู้ดูแลระบบ') }}</a>
                @endcan
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>


                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
           
            @endguest
					</ul>
				</div>
			</div>
		</nav>
	</header>
		
		@yield('content')
<footer class="footer-area footer--light">
  <div class="footer-big">
    <!-- start .container -->
    <div class="container">
      <div class="row">
        <div class="">
          <div class="footer-widget">
            <div class="widget-about">
         
              <p>สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ<br> 
              264 ถนนจักรวรรดิ แขวงจักรวรรดิ	เขตสัมพันธวงศ์ กรุงเทพฯ 10100<br>
               โทร : 0-2222-2814 ต่อ 5319,5330,5350
					</p>
            </div>
          </div>
          <!-- Ends: .footer-widget -->
        </div>
      </div>
      <!-- end /.row -->
    </div>
    <!-- end /.container -->
  </div>
  <!-- end /.footer-big -->

  <div class="mini-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-text">
            <p>© 2018
              <a>DigiPro</a>. All rights reserved. Created by
              <a>BIT</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


        <script>
  $(document).ready(function() {

$('.burger').click(function(){
  $('header').toggleClass('clicked');
});

$('nav ul li').click(function(){
  $('nav ul li').removeClass('selected');
  $('nav ul li').addClass('notselected');
  $(this).toggleClass('selected');
  $(this).removeClass('notselected');
});

});
$(window).scroll(function () {
	var sc = $(window).scrollTop()
	if (sc > 150) {
		$("#main-navbar").addClass("navbar-scroll")
	} 
	else {
		$("#main-navbar").removeClass("navbar-scroll")
	}
});

</script>
    </body>
</html>
