<?php
require "database.php";
session_start();
 if (!isset($_SESSION["username"])) {
 	header("location:user_login.php");
 }else{
 	     $_SESSION["username"];
         $_SESSION["firstname"];
         $_SESSION["othername"];
         $_SESSION["email"];
   
 $id2 = $_GET["id2"];
 $_SESSION["end_time"] = $id2;
 $category = $_GET["id"];

 $_SESSION["exam_category"] = $category;

 $query = mysqli_query($con, "SELECT * FROM exam_category WHERE category = '$category'");
 while ($row = mysqli_fetch_array($query)) {
 	 $all_question = $row["numbers_of_questions"];
 }
}
   // echo $all_question;  
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
	<title>NCS EXAM DASHBOARD</title>
	
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
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	
	<!-- header start -->
	<header class="ttr-header" style="">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div >
					<a href="#" class="ttr-logo">
						<span style="color: white;font-weight: bold;">NCS 2023 IT WHIZKIDS COMPETITION						
</span>
						<!-- <img alt="" class="ttr-logo-mobile" src="assets/images/logo-mobile.png" width="30" height="30">
						<img alt="" class="ttr-logo-desktop" src="assets/images/logo-white.pg" width="160" height="27"> -->
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
					<!-- <li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li> -->
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								
								<!-- <span class="ttr-notify-text">User Notifications</span> -->
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
			<div style="margin-left: 70%;color: #fff">
		<div style="float: left;font-family: vandana;font-weight: bold;font-size: 20px" id="current_que">0</div>
		<div style="float: left;font-size: 20px">/</div>
		<div style="float: left;font-family: vandana;font-weight: bold;font-size: 20px" id="total_question">0</div>
		</div>
			<span style="font-size: 30px;font-weight: bold;font-family: vandana;color: #fff;float: right;" id="timer"></span>
			<!--header search panel end -->
		</div>
	</header>
	<div style="color: blue; margin-top: 5%; padding-left: 10px; padding-right: 10px">
		<!--main content here@jetbrain-->
		<center>
		
		<input type="hidden" id="time" name="" value="<?php echo $_SESSION["end_time"]  ?>">
		
		
		<div style="">
			<br>
			<br>
			<br>
			<div style="margin-left: 32%;padding-top: 0;" id="load_questions"></div>

<br>
              <div style="display: block;margin-top: 25%; margin-left: 200px;">
            <input style="margin-right: 10%;width: 100px;font-size: 20px" class="btn btn-primary"  type="button" name="" value="Previous" onclick="load_previous();">  	
            <input style="margin-right: 20%;width: 100px;font-size: 20px" class="btn btn-primary" type="button" name="" value="Next" onclick="load_next();"> 
            <button id="submit_exam" style="margin-right: 2%;width: 140px;font-size: 20px; margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target = "#SubmitModal">Submit Exam</button>
            <input type="hidden" name="category" id="category" value="<?php echo $_SESSION["exam_category"] ?>">
            <input type="hidden" name="" id="all_question" value="<?php echo $all_question ?>">
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION["username"]; ?>">
              </div>
		</div>
		<br>

     		</center>
     		</div>
             
     		<div style="text-align: center; color: red;" id="question_navigation">
     			     		<?php
                    //for ($i=1; $i <= $all_question; $i++) { 
 //  echo "<button id='bt' class='question_navigate btn btn-primary' value = '".$i."'>".$i."</button>"." ";                  	
   //                 }
     			 ?>
     		</div>
     		
    <!--submission modal starts here --> 		
	
     <div style="margin-top: 7%" class="modal" data-keyboard="false" data-backdrop="static" id="SubmitModal" tabindex="-1">
      	<div class="modal-dialog">
      		<div class="modal-content">
      			<div style="display: block;" class="modal-header">
      				<h3 style="text-align: center; font-weight: bold;font-style: vandana; color: rgb(50,50,60);" class="modal-title">COMFIRM SUBMISSION</h3>
      			</div>
      			<div style="text-align: center;" class="modal-body">
      				<span style="font-size: 23px; font-family: serif;"  class="text-primary">Do you want to submit?</span>
      			</div>
      			<div style="display: block;" class="modal-footer">
      				<button id="yes_submit" style="margin-left: 38px; width: 100px; font-size: 20px" class="btn btn-primary">Yes</button> 
      				<button id="no_submit" style="margin-left: 38%; width: 100px;font-size: 20px" class="btn btn-primary" data-dismiss = "modal">No</button>
      			</div>
      		</div>
      	</div>
      	</div>
      	 <!--submission modal stop here --> 

      	 <!--complete exam question modal starts here-->
      	 <div style="margin-top: 7%" class="modal" data-keyboard="false" data-backdrop="static" id="complete_exam_modal" tabindex="-1">
      	<div class="modal-dialog">
      		<div class="modal-content">
      			<div style="display: block;" class="modal-header">
      				<h3 style="text-align: center; font-weight: bold;font-style: vandana; color: rgb(50,50,60);" class="modal-title">COMFIRM SUBMISSION</h3>
      			</div>
      			<div style="text-align: center;" class="modal-body">
      				<span style="font-size: 23px; font-family: serif;"  class="text-primary">Bravo!!!...You're through, but you still have time to go through your Exam. otherwise press the Submit button to submit your Exam.</span>
      			</div>
      			<div style="display: block;" class="modal-footer">
      				<button id="no_submit" style="margin-left: 38%; width: 100px;font-size: 20px" class="btn btn-primary" data-dismiss= "modal">OK</button>
      		</div>
      		</div>

      	</div>
      	</div>
                 
      	 <!--complete exam question modal stops here-->

<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
	var radio_session = $("#radio_session").val();
	var exam_category = $("#category").val();
	var user_id = $("#user_id").val();
	var question_no = 1;
	var all_question = $("#all_question").val();



  
	function total_question(exam_category){
		$.post("load_total_question.php",{exam_category : exam_category},function(data){
                  $("#total_question").html(data);
		});
	}
	//total_question(exam_category);
	function load_question(exam_category,question_no,radio_session){
	 $("#current_que").text(question_no);
		$.post("load_questions.php?user_id="+user_id,{exam_category : exam_category, question_no : question_no},function(data){
                      if (data == "over") {
                      	//alert("Thanks...Your through, but you still have time to go through your Exam. Else press the submit button to submit your Exam");
                         //window.location.href = window.location.href;
                      }else{
                      	$("#load_questions").html(data);
                      	total_question(exam_category);
                      }
		});
	}

load_question(exam_category,question_no);

	function load_previous(){
		if (question_no == 1) {
			load_question(exam_category,question_no);
		}else{
	       question_no = eval(question_no)-1;
	       load_question(exam_category,question_no);
		}
	}

	function load_next(){
		if (question_no == all_question) {
		$("#complete_exam_modal").modal("toggle");
		}else{
		question_no = eval(question_no)+1;
		load_question(exam_category,question_no);
		}
        
	}
	
	//radio button click function
	function radioclick(radiovalue, questionno){
		var question_answer = $("#question_answer").val();
		var exam_category = $("#category").val();
	 $.post("save_radio_session.php?user_id="+user_id+"&answer="+question_answer+"&category="+exam_category,{radiovalue : radiovalue, questionno :questionno},function(data){
             //var radio_data = $("#radio_session").val(data);
		    // alert(data);
         });
	}

	//creating question navigation function....
          function navigate(){
          	$(".question_navigate").click(function(){
   	      var question_no = $(this).val();
         load_question(exam_category,question_no);
      });
          }
          //activating question navigation function....
             // navigate();

        setInterval(function(){
            $.post("question_navigation.php",{all_question : all_question, user_id : user_id},function(data){
            	$("#question_navigation").html(data);
            });
        },1000);

  
  $("#yes_submit").click(function(){
  	window.location = "submit_exam.php?user_id=<?php echo $_SESSION["username"]; ?>&exam_category=<?php echo $_SESSION["exam_category"]; ?>"
  });
     
	
</script>


<script type="text/javascript">
	var time = $("#time").val();
	var exam_category = $("#category").val();
	var user_id = $("#user_id").val();
	setInterval(function(){
       $.post("timer_engine.php",{time : time, exam_category : exam_category, user_id :user_id},function(data){
            $("#timer").html(data);
            if (data <= "00:00:50") {
            	 $("#timer").css("color","red");
            }
            if (data == "00:00:01") {
            	window.location = "submit_exam.php?user_id=<?php echo $_SESSION["username"]; ?>&exam_category=<?php echo $_SESSION["exam_category"]; ?>";
            	            }
       });
	},1000);
</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>