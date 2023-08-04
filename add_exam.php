 <?php
    session_start();
    if (!isset($_SESSION["email"])) {
    	header("location: admin_login.php");
    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>jetbrain add new exam</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">

</head>
<body>

	<div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
  		<img src="logo.png" class="img-fluid" width="300" alt="Online Examination System in PHP" />
	</div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php">Admin Side</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="exam.php">Exam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>   
            </ul>
        </div>  
    </nav>

	<div class="container-fluid">
<br />



  	<div class="modal-dialog modal-lg">
    	<form method="post" id="form_data">

      		<div class="modal-content">
      			<!-- Modal Header -->
        		<div class="modal-header">
          			<h4 style="font-family: vandana" class="modal-title" id="modal_title">Add/Schedule new exam </h4>
          			<span id="message" style="font-family: vandana; font-size: 20px; color: rgb(0,0,255);display: none;">Exam Added successfully</span>
          			<span id="message2" style="font-family: vandana; font-size: 20px; color: rgb(0,0,255);display: none;">Please retry, an error occur!</span>
        		</div>

        		<!-- Modal body -->
        		<div class="modal-body">
          			<div class="form-group">
            			<div class="row">
              			<label class="col-md-4 text-right">Exam Category <span class="text-danger">*</span></label>
	              			<div class="col-md-8">
	                			<input type="text" name="exam_category" id="exam_category" class="form-control" />
	                			<span id="exam_category_feedback"></span>
	                		</div>
            			</div>
          			</div>
          			<div class="form-group">
            			<div class="row">
              				<label class="col-md-4 text-right">Exam Duration in minutes <span class="text-danger">*</span></label>
	              			<div class="col-md-8">
	                			<input type="text" name="exam_duration1" id="exam_duration1" class="form-control"  />
	                			<span id="exam_duration_feedback1"></span>
	                		</div>
            			</div>
          			
	        	<!-- Modal footer -->
	        	<div class="modal-footer">
	        		
	        	<input type="submit" name="add_exam" id="add_exam" class="btn btn-success btn-sm" value="Add Exam" />

	          		<button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
	        	</div>
        	</div>
    	</form>
  	</div>


<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script type="text/javascript" src="script/register.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
 

  $(document).ready(function(){
  
  	$("#datepicker").datepicker({
  		format : 'yyyy-mm-dd'
  	});
  	//$("#datepicker").datepicker("show");



    function exam_name(exam_category){
     if (exam_category.trim() == "") {
           $("#exam_category_feedback").text("**Exam Category must be provided").css("color","red");
           return false;
        }else{
          $("#exam_category_feedback").text("");	
        }

   	 }

   	
   	 function exam_duration1(exam_durationa){
   	 	if (exam_durationa =="") {
   	 		$("#exam_duration_feedback1").text("**Exam duration must be provided").css("color","red");
   	 		return false;
   	 	}else{
   	 	  $("#exam_duration_feedback1").text("");
   	 	}
      if (exam_durationa.length < 2) {
        $("#exam_duration_feedback1").text("**Exam duration format not supported").css("color","red");
        return false;
      }else{
        $("#exam_duration_feedback1").text("");
      }
   	 }

     
           $("#add_exam").click(function(e){
           	e.preventDefault();
           var exam_category = $("#exam_category").val();
           var exam_durationa = $("#exam_duration1").val();
           
           //activating functions.....
           exam_name(exam_category);
           exam_duration1(exam_durationa);
                      
          if (exam_name(exam_category) != false  && exam_duration1(exam_durationa) != false) {
          	
          	$.ajax({
              url : "add_exam_engine.php",
              method : "POST",
              data : {
              	"add_exam" : 1,
              	"exam_category" : exam_category,
              	"exam_duration" : exam_durationa,
                 },
              beforeSend : function(){
              	$("#add_exam").attr("disabled", "disabled");
              	$("#add_exam").val("Please wait...");
              },
              success : function(data){
                      if (data == "1") {
                    $("#message").fadeIn().delay(3000).fadeOut();
                    $("#add_exam").attr("disabled", false);
                  	$("#add_exam").val("Add");
                  	$("#form_data")[0].reset();
                    }else if (data == "2") {
                      	$("#message2").fadeIn().delay(3000).fadeOut()
                      	 $("#add_exam").attr("disabled", false);
                  	      $("#add_exam").val("Add");
                      }
              }

          	});
          }

             });
        });

  </script>

</body>
</html>