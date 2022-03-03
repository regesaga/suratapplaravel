<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>@yield('title')</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	{{-- <link rel="stylesheet" href="../../../releases/v5.8.2/css/all.css"> --}}
</head>
<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="index.html" class="logo"> <img src="{{asset('assets/img/hotel_logo.png')}}" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
				<a href="index.html" class="logo logo-small"> <img src="{{asset('assets/img/hotel_logo.png')}}" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets/img/profiles/avatar-02.jpg')}}">
                                            </span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets/img/profiles/avatar-11.jpg')}}">
                                            </span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">International Software
                                                    Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets/img/profiles/avatar-17.jpg')}}">
                                            </span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone
                                                    XR</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets/img/profiles/avatar-13.jpg')}}">
                                            </span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Mercury Software
                                                    Inc</span> added a new product <span class="noti-title">Apple
                                                    MacBook Pro</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
					</div>
				</li>
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="{{asset('assets/img/profiles/avatar-01.jpg')}}" width="31" alt="Soeng Souy"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="{{asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6>Soeng Souy</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div> 
						<a class="dropdown-item" href="profile.html">My Profile</a> 
						<a class="dropdown-item" href="settings.html">Account Settings</a> 
						<form action="{{route('logout.user')}}" method="POST">
							@csrf
							@method('GET')
							<button type="submit" class="dropdown-item">Logout</button>
						</form>
				</li>
			</ul>
		</div>


		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				@include('partisi.sidebar')
			</div>
		</div>


		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
                    @yield('content')
				{{-- <h1 class="mt-5 blank_title">Blank Page</h1> </div> --}}
			</div>
		</div>

        
	</div>

    @include('sweetalert::alert')

	<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.j')}}s"></script>
	<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>