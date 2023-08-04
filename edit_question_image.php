 <?php
  require "database.php";
   $exam_category = "";
   $question = "";
   $option1 = "";
   $option2 = "";
   $option3 = "";
   $option4 = "";
   $answer = "";

   $id = $_GET["id"];
   $sql = "SELECT * FROM questions WHERE id = '$id'";
   $query = mysqli_query($con,$sql);
   while ($data = mysqli_fetch_array($query)) {
    $exam_category = $data["category"];
     $question = $data["question"];
     $option1 = $data["opt1"];
     $option2 = $data["opt2"];
     $option3 = $data["opt3"];
     $option4 = $data["opt4"];
     $answer = $data["answer"];
   }

   ?>
<!DOCTYPE html>
<html>
<head>
  <title>Jetbarin online examination</title>
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
        <a style="font-family: vandana; font-size: 20px" class="navbar-brand" href="index.php">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style="font-family: vandana; font-size: 20px" class="nav-link" href="exam.php">Exam</a>
                </li>
                <li class="nav-item">
                    <a style="font-family: vandana; font-size: 20px" class="nav-link" href="user.php">User</a>
                </li>
                 
                 <li class="nav-item">
                    <a  style="font-family: vandana; font-size: 20px; margin-left: 1100%" class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>  
    </nav>
<br />
 
      <form method="POST" id="question_form" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
      
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 style="font-family: vandana" class="modal-title" id="question_modal_title">Update Question with image option in  <span style="font-family: vandana;font-size: 20px;color: blue"><?php echo $exam_category;  ?></span></h4>
                <span id="message" style="margin-right: 38%;font-family: vandana; font-size: 20px"></span>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                  <div class="row">
                      <label class="col-md-4 text-right">Question<span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="text" name="question" id="question" class="form-control" value="<?php echo $question ?>" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <img style="margin-left: 38%; margin-bottom: 10px " src="<?php echo $option1 ?>" height = 50 width = 50 />
                  <div class="row">
                      <label class="col-md-4 text-right">Option 1 <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="file" name="option1" id="option1" class="form-control" value="" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <img style="margin-left: 38%; margin-bottom: 10px " src="<?php echo $option2 ?>" height = 50 width = 50 />
                  <div class="row">
                      <label class="col-md-4 text-right">Option 2 <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="file" name="option2" id="option2" class="form-control" value="" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <img style="margin-left: 38%; margin-bottom: 10px " src="<?php echo $option3 ?>" height = 50 width = 50 />
                  <div class="row">
                      <label class="col-md-4 text-right">Option 3 <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="file" name="option3" id="option3" class="form-control" value="" />
                      </div>
                  </div>    
                </div>
                <div class="form-group">
                  <img style="margin-left: 38%; margin-bottom: 10px " src="<?php echo $option4 ?>" height = 50 width = 50 />
                  <div class="row">
                      <label class="col-md-4 text-right">Option 4 <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="file" name="option4" id="option4" class="form-control" value="" />
                      </div>
                  </div>
                </div>
                 <div class="form-group">
                  <img style="margin-left: 38%; margin-bottom: 10px " src="<?php echo $answer ?>" height = 50 width = 50 />
                  <div class="row">
                      <label class="col-md-4 text-right">Answer<span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="file" name="answer" id="answer" class="form-control" value="" />
                      </div>
                  </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
             <input type="hidden" name="row_id" id="row_id" value="<?php echo $id; ?>">
             <input type="hidden" name="exam_category" id="exam_category" value="<?php echo $exam_category; ?>">
             <input id="action" name="action" class="form-control" type="hidden" value="update">
              <input type="submit" name="update_question" id="update_question" class="btn btn-success btn-sm" value="Update Question" />
              
                <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
          </div>
    
    </div>
      </form>
    
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
      $("#question_form").submit(function(e){
          e.preventDefault();
         var question = $("#question").val();
         var option1 = $("#option1").val();
         var option2 = $("#option2").val();
         var option3 = $("#option3").val();
         var option4 = $("#option4").val();
         var answer = $("#answer").val();
         var row_id = $("#row_id").val();
         var exam_category = $("#exam_category").val();
         var data = new FormData(this);
     
 
if (question == "" || option1 == "" || option2 == "" || option3 == "" || option4 == "" || answer == "") {
  $("#message").text("Filled the fields completely").css("color","red").delay(3000).fadeOut();
}else{
  $("#message").hide();
  $.ajax({
    url:"update_image_option_engine.php",
    method: "POST",
    data: data, 
    contentType:false,
    cache: false,
    processData:false,
    beforeSend : function(){
      $("#update_question").attr("disabled","disabled");
      $("#update_question").val("Please wait...");
    },
    success : function(data){
          if (data == 1) {
          $("#message").text("Question updated successfully").css("color","blue").fadeIn().delay(3000).fadeOut();
          window.location.href = window.location.href;
          $("#update_question").attr("disabled",false);
          $("#update_question").val("Update Question");
          $("#question_form")[0].reset();
          }else if (data == 2) {
          $("#message").text("Failed, please retry").css("color","blue").fadeIn().delay(3000).fadeOut();
          $("#update_question").attr("disabled", false);
          $("#update_question").val("Update Question"); 
          }else{
            alert(data);
             $("#update_question").attr("disabled",false);
          $("#update_question").val("Add");
          }
    }

  });
  }
      });
   });
  </script>
</body>
</html>