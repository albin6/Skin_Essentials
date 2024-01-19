
<?php include("session.php")?>
<!DOCTYPE HTML>
<html>
<head>
<title>Skin Essentials </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../assets/assets_admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../assets/assets_admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="../assets/assets_admin/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="../assets/assets_admin/js/jquery-1.11.1.min.js"></script>
<script src="../assets/assets_admin/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--animate-->
<link href="../assets/assets_admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../assets/assets_admin/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="../assets/assets/js/myjs.js"></script>
<script src="../assets/assets_admin/js/metisMenu.min.js"></script>
<script src="../assets/assets_admin/js/custom.js"></script>
<link href="../assets/assets_admin/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" style="overflow: scroll; background-color: #197da4e5;color: white;">
					<ul class="nav" id="side-menu">
						<li>
							<a href="#"><i class="fa fa-file nav_icon"></i>Appointment List<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="new_appointment.php">New Appointment</a>
								</li>
								<li>
									<a href="all_appointment_list.php">All List</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-file nav_icon"></i>Patient List<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="view_patient.php">View Patient List</a>
								</li>
								
							</ul>
						</li>
						
						<li>
							<a href="#"><i class="fa fa-book nav_icon"></i>Profile<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="profile.php">Profile</a>
								</li>
								<li>
									<a href="change_password.php">Change Password</a>
								</li>
							</ul>
						</li>

						

					


					

						<li>
							<a href="../logout.php"><i class="fa fa-sign-out nav_icon"></i>Logout</a>

						</li>
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="#">
						<h1 style="letter-spacing: 2px;">Doctor</h1>
						
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box ">
					<h3 class="title1" style="letter-spacing: 2px; ">Skin Essentials </h3>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">

				<!--notification menu end -->
				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="images/a.png" alt=""> </span>
									<div class="user-name">
										<p> Doctor<p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">

								<li> <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>