<?php
session_start();
 if (!isset($_SESSION["username"])) {
 	header("location:user_login.php");
 }else{
 	     $_SESSION["username"];
         $_SESSION["firstname"];
         $_SESSION["othername"];
         $_SESSION["email"];
     	
 }
 
  ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="Jetbrain development academy" />
	
	<!-- OG -->
	<meta property="og:title" content="Jetbrain development academy" />
	<meta property="og:description" content="Jetbrain development academy" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>NCS EXAM</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div >
					<a href="user_dashboard.php" class="ttr-logo">
						<span style="color: white;font-weight: bold;">CNCS 2023 IT WHIZKIDS COMPETITION</span>

					</a>

				</div>
			</div>		<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<!-- header left menu end -->
			</div>

			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<!-- <li><a style="font-size: 20px" href="user_all_result.php">View all Result</a></li> -->
					<li><a style="font-size: 20px;pointer-events: " href="user_last_result.php" >VIEW RESULT</a></li>
 <!-- 
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li> -->
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								
								<span class="ttr-notify-text">User Notifications</span>
							</div>
							<div class="noti-box-list">
								</div>
						</div>
					</li>
					<li>

						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="assets/images/testimonials/pic3.jpg" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
					           <li><a href="#">Logout</a></li>
							</ul>
						</div>
					</li>
					<li class="ttr-hide-on-mobile">
						<a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
						<div class="ttr-header-submenu ttr-extra-menu">
							
							<div><span>Active</span></div>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<div style="color: blue; margin-top: 10%;text-align: center; position: absolute; left: 10%;right: 10%;margin-right: 22%;">
		<!--main content here@jetbrain-->
		<span style="font-size: 25px; font-family: vandana; margin-left: 40%;font-weight: bold">CLICK ON THE EXAM TYPE TO START</span>
		<?php
		//session_start();
		        require "database.php";
		        $user_id =  $_SESSION["username"];
     $sql = mysqli_query($con,"SELECT * FROM user_login WHERE user_id = '$user_id' AND exam_status = '1' ");
               $sql_row = mysqli_num_rows($sql);

           if ($sql_row > 0) {
           	$query = mysqli_query($con,"SELECT * FROM user_login");
               while ($row = mysqli_fetch_array($query)) {
 	          $exam_category = $row["exam_category"];
 	          $exam_time = $row["exam_duration"];

 	          $_SESSION["duration"] = $exam_time;
 	          $_SESSION["start_time"] = date("Y-m-d H:i:s");

 $end_time = date("Y-m-d H:i:s", strtotime("+".$_SESSION["duration"]."minutes",strtotime($_SESSION["start_time"])));
        $_SESSION["end_time"] = $end_time;
         $time = $_SESSION["end_time"];
 
 	                 echo "
                      <div style = 'margin-left: 39%;margin-top:5%'>
                          <a  href='exam_page.php?id=$exam_category&id2=$time'>".$exam_category." </a>"."<span>".$exam_time." Minutes Remaining</span>
                      </div>
 	                 ";
               }

           }else{
          $query = mysqli_query($con,"SELECT * FROM exam_category");
               while ($row = mysqli_fetch_array($query)) {
 	          $exam_category = $row["category"];
 	          $exam_time = $row["exam_duration_minute"];

 	          $_SESSION["duration"] = $exam_time;
 	          $_SESSION["start_time"] = date("Y-m-d H:i:s");

 $end_time = date("Y-m-d H:i:s", strtotime("+".$_SESSION["duration"]."minutes",strtotime($_SESSION["start_time"])));
 $_SESSION["end_time"] = $end_time;
 $time = $_SESSION["end_time"];
 
 	                 echo "
                      <div style = 'margin-left: 42%;margin-top:5%'>
                          <a style='font-weight:bold;font-size:20px' href='exam_page.php?id=$exam_category&id2=$time'>".$exam_category." </a>"."<span>".$exam_time." Minutes</span>
                      </div>
 	                 ";
               }

           }
              

		 ?>

	</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
<script src='assets/vendors/calendar/moment.min.js'></script>
<script src='assets/vendors/calendar/fullcalendar.js'></script>

</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>