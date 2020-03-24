<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="../public/css/hamburgers.css">
	<link rel="stylesheet" href="../../resources/sass/hamburgers/hamburgers.scss">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		@import "../../resources/sass/hamburgers/hamburgers.scss";
		.nav-container {
			width: 100%;
			height: 80px;
			background-color: #ff6f61;
			border-radius: 0px;
			z-index: 18;
			position: fixed;
			padding: 15px 0px;
			top: 0;
			left: 0;
			transition: all 0.5s;
		}
		
		.hamburger {
			padding: 10px 10px!important;
			display: inline-block;
			cursor: pointer;
			transition-property: opacity, filter;
			transition-duration: 0.15s;
			transition-timing-function: linear;
			font: inherit;
			color: inherit;
			text-transform: none;
			background-color: transparent;
			border: 0;
			margin: 0;
			overflow: visible;
		}
		
		.hamburger-inner,
		.hamburger-inner::before,
		.hamburger-inner::after {
			width: 30px!important;
			height: 3px!important;
		}
		
		.hamburg-con {}
		
		.logo {
			padding: 5px 10px;
			font-size: 36px;
			float: right;
			padding-left: 50px;
		}
		
		.hampad {
			float: left;
   			padding-left: 10px;
    		padding-top: 6px;
		}
		
		.hampad-r {
		    float: right;
    		padding-top: 20px;
		}
		
		.sitename {
			width: 170px;
			height: auto;
			margin-left: -85px;
		}
		
		.sitename img {
			width: 100%;
			height: 100%;
		}
		
		.logo-container {
			top: 25px;
			position: fixed;
			z-index: 1000;
			left: 50%;
		}
		
		.hamburger-inner,
		.hamburger-inner::before,
		.hamburger-inner::after {
			background-color: #ffffff!important;
		}
		
		.hamburger-inner,
		.hamburger-inner::before,
		.hamburger-inner::after:hover {
			background-color: #ffffff!important;
		}
		
		.menu-box {
			background-color: #ff6f61;
			position: fixed;
			width: 100%;
			top: -100%;
			padding: 5px;
			color: white;
			left: 0px;
			transition: all 0.5s;
		}
		
		.menu-box-after {
			padding-top: 100px;
    top: 0px;
    transition: all 0.5s;
		}
		
		.nav-menu {
			cursor: pointer;
			font-weight: bold;
		}
		
		.nav-bar-afer {
			-webkit-box-shadow: 0px 0px 35px -13px rgba(0, 0, 0, 0.51);
			-moz-box-shadow: 0px 0px 35px -13px rgba(0, 0, 0, 0.51);
			box-shadow: 0px 0px 35px -13px rgba(0, 0, 0, 0.51);
			transition: all 0.5s;
		}
		
		.pd {
			padding: 8px 16px;
		}
		
		.w3-dropdown-hover:first-child,
		.w3-dropdown-click:hover {
			background-color: #ccc0!important;
			color: #fff!important;
		}
		
		.w3-dropdown-content {
			color: #fff!important;
			background-color: #ff6f61!important;
		}
		/*
		.w3-dropdown-hover:first-child, .w3-dropdown-click:hover {
    background-color: #F0F0F0!important;
    color: #000!important;
}
*/
		
		.traing {
			width: 0;
			height: 0;
			border-style: solid;
			border-width: 5px 5px 0 5px;
			border-color: #ffffff transparent transparent transparent;
			display: inline-block;
			/* padding-left: 7px; */
			margin-left: 5px;
			/* margin-top: 8px; */
			margin-bottom: 2px;
		}
		
		.w3-dropdown-hover:hover .traing {
			border-color: #000000 transparent transparent transparent!important;
		}
		
		.warper {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: #00000082;
			z-index: 0;
			opacity: 0;
			transition: all 0.5s;
		}
		
		.warper-after {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: #00000082;
			z-index: 500;
			opacity: 100;
			transition: all 0.5s;
		}
		
		.big-container-nav{
			display: none;
		}
		
		@media only screen and (max-width: 988px) {
	.big-container-nav{
			display: block;
		}
}

.sitename img {
	width: 150px;
    height: 50px;
    position: fixed;
    top: 19px;
    z-index: 3000;
    left: 50%;
    margin-left: -90px;
    transition: all 0.5s;
}
.scroll-height{
	width: 100%;
			height: 80px;
			background-color: #ff6f61;
			border-radius: 0px;
			z-index: 18;
			position: fixed;
			padding: -10px 0px
			top: 0;
			left: 0;
	height: 50px;
	transition: all 0.5s;
}

.logo-scroll img{
	width: 170px;
    height: 50px;
    position: fixed;
    top: 0px;
    z-index: 3000;
    left: 50%;
	margin-left: -85px;
	transition: all 0.5s;
}

		a{
			text-decoration: none!important;
		}
		
		a{
				outline:none!important;
		}
		

		.fa-sign-in:before {
			color:#FFFFFF!important;
		}
		.fa-user-circle {
			color:#FFFFFF!important;
		}
		.fa-database {
			color:#000000!important;
		}
		.fa-sign-out {
			color:#000000!important;
		}
	</style>
</head>

<body>

	
	
	<div class="big-container-nav">

		@foreach($headers as $header)
		<div class="logo-container" style="z-index: 2500;">
            <a id="LOGO" class="sitename" href="{{ route('homee') }}">
			<img  src="{{ asset('images/'.$header->image) }}">

			 </a>
			 </div>
          @endforeach
			

	<div id="NVBR" class="nav-container clearfix" style="z-index: 2000;">
		<div id="hamclk" class="hamburg-con hampad" onclick="navright()">
			<div id="SPN" class="hamburger hamburger--spin">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</div>


		<div id="hamclk" class="hamburg-con hampad-r" onclick="navright()">
		<div class="top-social" style="margin-top: -10px;">
					<ul id="top-social-menu-m">
            @guest
            <li><span class="	fa fa-sign-in fa-2x"></span>&nbsp;<a style="color: black;" href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
        
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: black"; href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="fa fa-user-circle "></span>
              </a>
             
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">    
                @can('user_access')        
                <a class="dropdown-item" href="admin"><span class="fa fa-database "></span>&nbsp;{{ __('สำหรับผู้ดูแลระบบ') }}</a>
                @endcan
                  <a class="dropdown-item" href="{{ route('homee') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <span class="fa fa-sign-out "></span>&nbsp;{{ __('ออกจากระบบ') }}
                  </a>


                  <form id="logout-form" action="{{ route('homee') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
           
            @endguest
					</ul>
				</div>
			</div>
		</div>


	</div>

	<div id="MB" class="menu-box" style="z-index: 1500;">

		<div class="nav-menu pd">หน้าหลัก</div>
		<div class="nav-menu">
			<div class="w3-dropdown-hover">
				<button class="w3-button">หลักสูตร<div class="traing"></div></button>
				<div class="w3-dropdown-content w3-bar-block w3-card-4">
					<a href="{{ route('category') }}" class="w3-bar-item w3-button">ข้อมูลหลักสูตร</a>
					<a href="{{ route('bitcourse') }}" class="w3-bar-item w3-button">กลุ่มวิชาการพัฒนาซอฟต์แวร์</a>
					<a href="{{ route('mitcourse') }}" class="w3-bar-item w3-button">กลุ่มวิชาการจัดการเทคโนโลยีสารสนเทศ</a>
				</div>
			</div>
		</div>
		<div class="nav-menu pd">คณาจารย์</div>

		<div class="nav-menu">
			<div class="w3-dropdown-hover">
				<button class="w3-button">นักศึกษา<div class="traing"></div></button>
				<div class="w3-dropdown-content w3-bar-block w3-card-4">
					<a href="{{ route('award') }}" class="w3-bar-item w3-button">รางวัล</a>
					<a href="{{ route('success') }}" class="w3-bar-item w3-button">ความสำเร็จของศิษย์เก่า</a>
					<a href="{{ route('cooperative') }}" class="w3-bar-item w3-button">ผลงานสหกิจศึกษา</a>
					<a href="{{ route('apprentice') }}" class="w3-bar-item w3-button">ผลงานโครงงาน</a>
					<a href="{{ route('location') }}" class="w3-bar-item w3-button">สถานประกอบการสหกิจ/ฝึกงาน</a>
					<a href="{{ route('student') }}" class="w3-bar-item w3-button">รายชื่อนักศึกษา</a>
				</div>
			</div>
		</div>
	</div>

	<div id="WRP" class="warper" onclick="closeNavright()">
	<div class="top-social" style="margin-top: -10px;">
					<ul id="top-social-menu-m">
            @guest
            <li><span class="	fa fa-sign-in fa-2x"></span>&nbsp;<a style="color: black;" href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
        
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: black"; href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="fa fa-user-circle "></span>
              </a>
             
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">    
                @can('user_access')        
                <a class="dropdown-item" href="admin"><span class="fa fa-database "></span>&nbsp;{{ __('สำหรับผู้ดูแลระบบ') }}</a>
                @endcan
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <span class="fa fa-sign-out "></span>&nbsp;{{ __('ออกจากระบบ') }}
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
		</div>
	</div>

</div>
	<script>
		/**
		 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
		 *
		 * @private
		 * @author Todd Motto
		 * @link https://github.com/toddmotto/foreach
		 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
		 * @callback requestCallback      callback   - Callback function for each iteration.
		 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
		 * @returns {}
		 */
		var forEach = function ( t, o, r ) {
			if ( "[object Object]" === Object.prototype.toString.call( t ) )
				for ( var c in t ) Object.prototype.hasOwnProperty.call( t, c ) && o.call( r, t[ c ], c, t );
			else
				for ( var e = 0, l = t.length; l > e; e++ ) o.call( r, t[ e ], e, t )
		};

		var hamburgers = document.querySelectorAll( ".hamburger" );
		if ( hamburgers.length > 0 ) {
			forEach( hamburgers, function ( hamburger ) {
				hamburger.addEventListener( "click", function () {
					this.classList.toggle( "is-active" );
				}, false );
			} );
		}

		function navright() {

			
			
			document.getElementById( "SPN" ).classList.add( 'is-active' );
			document.getElementById( "WRP" ).classList.add( 'warper-after' );
			document.getElementById( "MB" ).classList.add( 'menu-box-after' );
			document.getElementById( "NVBR" ).classList.add( 'nav-bar-afer' );

			//			document.getElementById( "backdrop" ).classList.remove( 'backdrop' );
			//			document.getElementById( "backdrop" ).classList.add( 'backdrop-after' );
			//			document.getElementById( "nav-container" ).classList.add( 'nav-right-after' );

			document.getElementById( "hamclk" ).removeAttribute( "onclick" );

			var mainID = document.getElementById( "hamclk" );
			var attrOnclick = document.createAttribute( "onclick" );
			attrOnclick.value = "closeNavright()";
			mainID.setAttributeNode( attrOnclick );

		}


		function closeNavright() {
			document.getElementById( "SPN" ).classList.remove( 'is-active' );
			document.getElementById( "WRP" ).classList.remove( 'warper-after' );
			document.getElementById( "NVBR" ).classList.remove( 'nav-bar-afer' );
			document.getElementById( "MB" ).classList.remove( 'menu-box-after' );

			document.getElementById( "hamclk" ).removeAttribute( "onclick" );

			var mainID = document.getElementById( "hamclk" );
			var attrOnclick = document.createAttribute( "onclick" );
			attrOnclick.value = "navright()";
			mainID.setAttributeNode( attrOnclick );
		}







	</script>
	
 

</body>