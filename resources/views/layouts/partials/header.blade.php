<!-- Header -->
@if(!Route::is(['index-one','index-three','index-four','pos']))
<div class="header">
@endif	
@if(Route::is(['index-one','pos']))
<div class="header header-one">	
@endif	
@if(Route::is(['index-three']))
<div class="header header-three">
@endif
@if(Route::is(['index-four']))
<div class="header header-four">
@endif	
@if(Route::is(['index-two']))
<div class="container">
@endif	
@if(Route::is(['index-two']))
<div class="d-flex justify-content-between align-items-center header-block">
@endif
	<!-- Logo -->
	<div class="header-left active">
		<a href="{{ route('admin.home') }}" class="logo logo-normal">
			<img src="{{ URL::asset('/assets/img/logo.png')}}"  alt="">
		</a>
		
		<a href="{{ route('admin.home') }}" class="logo logo-white">
			<img src="{{URL::asset('assets/img/logo-white.png')}}"  alt="">
		</a> 
		<a href="{{ route('admin.home') }}" class="logo-small">
			<img src="{{ URL::asset('/assets/img/logo-small.png')}}"  alt="">
		</a>
		@if(!Route::is(['index-one','index-three','index-four','pos']))
		<a id="toggle_btn" href="javascript:void(0);">
			<i data-feather="chevrons-left" class="feather-16"></i>
		</a>
		@endif
		
	</div>
	<!-- /Logo -->
	
	<a id="mobile_btn" class="mobile_btn" href="#sidebar">
		<span class="bar-icon">
			<span></span>
			<span></span>
			<span></span>
		</span>
	</a>
	<!-- Header Menu -->
	<ul class="nav user-menu">
		
		<!-- Search -->
		<li class="nav-item nav-searchinputs">
			<div class="top-nav-search">
				<a href="javascript:void(0);" class="responsive-search">
					<i class="fa fa-search"></i>
				</a>
				<form action="#">
					<div class="searchinputs">
						<input type="text" placeholder="Search">
						<div class="search-addon">
							<span><i data-feather="search" class="feather-14"></i></span>
						</div>
					</div>
				</form>
			</div>
		</li>
		<!-- /Search -->
		<li class="nav-item dropdown has-arrow main-drop">
			<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
				<span class="user-info">
					<span class="user-letter">
						<img src="{{ URL::asset('/assets/img/profiles/avator1.jpg')}}" alt="">
					</span>
					<span class="user-detail">
						<span class="user-name"> {{ Auth::user()->name }}</span>
						<span class="user-role"> {{ Auth::user()->type }}</span>
					</span>
				</span>
			</a>
			<div class="dropdown-menu menu-drop-user">
				<div class="profilename">
					<div class="profileset">
						<span class="user-img"><img src="{{ URL::asset('/assets/img/profiles/avator1.jpg')}}" alt="">
						<span class="status online"></span></span>
						<div class="profilesets">
							<h6> {{ Auth::user()->name }}</h6>
							<h5> {{ Auth::user()->type }}</h5>
						</div>
					</div>
					<hr class="m-0">
					<a class="dropdown-item" href="{{url('profile')}}"> <i class="me-2"  data-feather="user"></i> My Profile</a>
					<a class="dropdown-item" href="{{url('generalsettings')}}"><i class="me-2" data-feather="settings"></i>Settings</a>
					<hr class="m-0">
					<a class="dropdown-item logout pb-0" href="{{ route('logout') }}"  onclick="event.preventDefault();
					document.getElementById('logout-form').submit();"><img src="{{ URL::asset('/assets/img/icons/log-out.svg')}}" class="me-2" alt="img">{{ __('Logout') }}</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</div>
			</div>
		</li>
	</ul>
	<!-- /Header Menu -->
	
	<!-- Mobile Menu -->
	<div class="dropdown mobile-user-menu">
		<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="{{url('profile')}}">My Profile</a>
			<a class="dropdown-item" href="{{url('generalsettings')}}">Settings</a>
			<a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
					

		</div>
	</div>
	<!-- /Mobile Menu -->
	@if(Route::is(['index-three']))
	</div>
	@endif
	@if(Route::is(['index-two']))	
	</div>
</div>
@endif	

</div>

<!-- Header -->
<script>
function toggleFullscreen(elem) {
	elem = elem || document.documentElement;
	if (!document.fullscreenElement && !document.mozFullScreenElement &&
	  !document.webkitFullscreenElement && !document.msFullscreenElement) {
	  if (elem.requestFullscreen) {
		elem.requestFullscreen();
	  } else if (elem.msRequestFullscreen) {
		elem.msRequestFullscreen();
	  } else if (elem.mozRequestFullScreen) {
		elem.mozRequestFullScreen();
	  } else if (elem.webkitRequestFullscreen) {
		elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
	  }
	} else {
	  if (document.exitFullscreen) {
		document.exitFullscreen();
	  } else if (document.msExitFullscreen) {
		document.msExitFullscreen();
	  } else if (document.mozCancelFullScreen) {
		document.mozCancelFullScreen();
	  } else if (document.webkitExitFullscreen) {
		document.webkitExitFullscreen();
	  }
	}
  }
  
  document.getElementById('btnFullscreen').addEventListener('click', function() {
	toggleFullscreen();
  });
</script>