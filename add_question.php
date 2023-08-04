
<?php
    session_start();
    if (!isset($_SESSION["email"])) {
      header("location: admin_login.php");
    }
    require "database.php";
    $exam_category = "";
   $id = $_GET["id"];
   $sql = "SELECT * FROM exam_category WHERE id = '$id'";
   $query = mysqli_query($con,$sql);
   while ($row = mysqli_fetch_array($query)) {
     $exam_category = $row["category"];
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
                    <a style="font-family: vandana; font-size: 20px" class="nav-link" href="add_image_option.php?id= <?php echo $_GET["id"]?>">Add Question with image option</a>
                </li>  
                 <li class="nav-item">
                    <a style="font-family: vandana; font-size: 20px" class="nav-link" href="image_question.php?id=<?php echo $_GET["id"] ?>">Add Image question</a>
                </li> 
                 <li class="nav-item">
                    <a  style="font-family: vandana; font-size: 20px; margin-left: 1100%" class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>  
    </nav>

  <div class="container-fluid">
<br />
 
 
    <div class="modal-dialog modal-lg">
      <form method="post" id="question_form"
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 style="font-family: vandana" class="modal-title" id="question_modal_title">Add Question in  <span style="font-family: vandana;font-size: 20px;color: blue"><?php echo $exam_category;  ?></span></h4>
                <span id="message" style="margin-right: 38%;font-family: vandana; font-size: 20px"></span>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                  <div class="row">
                      <label class="col-md-4 text-right">Question<span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="text" name="question" id="question" autocomplete="off" class="form-control" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <label class="col-md-4 text-right">Option 1 <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="text" name="option1" id="option1" autocomplete="off" class="form-control" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <label class="col-md-4 text-right">Option 2 <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="text" name="option2" id="option2" autocomplete="off" class="form-control" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <label class="col-md-4 text-right">Option 3 <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="text" name="option3" id="option3" autocomplete="off" class="form-control" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <label class="col-md-4 text-right">Option 4 <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <input type="text" name="option4" id="option4" autocomplete="off" class="form-control" />
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <label class="col-md-4 text-right">Answer <span class="text-danger">*</span></label>
                      <div class="col-md-8">
                        <select name="answer" id="answer" class="form-control">
                          <option value="">Select</option>
                          <option value="1">1 Option</option>
                          <option value="2">2 Option</option>
                          <option value="3">3 Option</option>
                          <option value="4">4 Option</option>
                        </select>
                      </div>
                  </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
             <input type="hidden" name="" id="row_id" value="<?php echo $id; ?>">
             <input type="hidden" name="" id="exam_category" value="<?php echo $exam_category; ?>">
              <input type="submit" name="add_question" id="add_question" class="btn btn-success btn-sm" value="Add" />
              
                <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
          </div>
      </form>
    </div>

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
      $("#add_question").click(function(e){
          e.preventDefault();
         var question = $("#question").val();
         var option1 = $("#option1").val();
         var option2 = $("#option2").val();
         var option3 = $("#option3").val();
         var option4 = $("#option4").val();
         var answer = $("#answer").val();
         var row_id = $("#row_id").val();
         var exam_category = $("#exam_category").val();
      if (answer == "1") {
        var answer_id = $("#option1").val();
     }else if (answer == "2") {
      var answer_id = $("#option2").val();
     }else if (answer == "3") {
      var answer_id = $("#option3").val();
     }else if (answer == "4") {
      var answer_id = $("#option4").val();
     }
 
if (question == "" || option1 == "" || option2 == "" || option3 == "" || option4 == "" || answer == "") {
  $("#message").text("Filled the fields completely").css("color","red");
}else{
  $("#message").hide();
  $.ajax({
    url : "add_question_engine.php",
    method : "POST",
    data : {
         "add_question" : 1,
         "question" : question,
         "option1" : option1,
         "option2" : option2,
         "option3" : option3,
         "option4" : option4,
         "answer_id"  : answer_id,
         "row_id" : row_id,
         "exam_category" : exam_category
    },
    beforeSend : function(){
      $("#add_question").attr("disabled","disabled");
      $("#add_question").val("Please wait...");
    },
    success : function(data){
          if (data == 1) {
          $("#message").text("Question added successfully").css("color","blue").fadeIn().delay(3000).fadeOut();
          $("#add_question").attr("disabled",false);
          $("#add_question").val("Add");
          $("#question_form")[0].reset();
          }else if (data == 2) {
          $("#message").text("Failed, please retry").css("color","blue").fadeIn().delay(3000).fadeOut();
          $("#add_question").attr("disabled", false);
          $("#add_question").val("Add"); 
          }
    }

  });
  }
      });
   });
  </script>
</body>
</html>