<?php
session_start();
if (!isset($_SESSION["email"])) {
      header("location:admin_login.php");
    }
 require "database.php";
    $id1 = $_GET["id"];
 $sql = "SELECT * FROM exam_category WHERE id = '$id1' ";
 $query = mysqli_query($con,$sql);
  while ($data = mysqli_fetch_array($query)) {
  	$exam_category = $data["category"];
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  	 <title>Jetbrain academy online examination admin account</title>
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
        <a class="navbar-brand" href="index.php">Admin Dashboard</a>
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
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-9">
				<h3 style="font-family: vandana" class="panel-title">Questions List in <span><?php echo $exam_category; ?></span></h3>
			</div>
			<div class="col-md-3" align="right">
				
				
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="exam_data_table" class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						 <th>Question No.</th>
						 <th>Question</th>
						  <th>Option1</th>
						  <th>Option2</th>
					    <th>Option3</th>
					    <th>Option4</th>
					    <th>Answer</th>
              <th>Edit Question</th>
              <th>Delete Question</th>
					</tr>
           <?php
           $id1 = $_GET["id"];
          // echo $id1;
            $sql = "SELECT * FROM questions WHERE category = '$exam_category' ";
            $query = mysqli_query($con,$sql);
            while ($rows = mysqli_fetch_array($query)) {
                 if (strpos($rows["question"], "image_database/") !== false) {
                   $question = "<img src = ".$rows["question"]."  height = 50 width = 50/>";
                 }else{
                  $question = $rows["question"];
                 }

                 if (strpos($rows["opt1"], "image_database/") !== false) {
                 $option1 = "<img src = ".$rows["opt1"]." height = 50 width = 50/>";
                 }else{
                 	$option1 = $rows["opt1"];
                 }

                 if (strpos($rows["opt2"], "image_database/") !== false) {
                   $option2 = "<img src = ".$rows["opt2"]." height = 50 width = 50 />";
                 }else{
                  $option2 = $rows["opt2"];
                 }

                 if (strpos($rows["opt3"], "image_database/") !== false) {
                   $option3 = "<img src = ".$rows["opt3"]." height = 50 width = 50 />";
                 }else{
                  $option3 = $rows["opt3"];
                 }

                 if (strpos($rows["opt4"], "image_database/") !== false) {
                   $option4 = "<img src = ".$rows["opt4"]." height = 50 width = 50/>";
                 }else{
                   $option4 = $rows["opt4"];
                 }

                 if (strpos($rows["answer"], "image_database/") !== false) {
                   $answer = "<img src = ".$rows["answer"]." height = 50 width = 50/>";
                 }else{
                   $answer = $rows["answer"];
                 }
                   $id = $rows["id"];
                 if (strpos($rows["opt1"], "image_database/") !== false) {
                  $edit = "<a href = edit_question_image.php?id=".$id." >Edit</a>";
                 }else{
                  $edit = "<a href = edit_question.php?id=".$id." >Edit</a>";
                 }
            


                  
                 echo "<tr>";
						  echo "<td>".$rows["question_no"]."</td>";
						  echo "<td>".$question."</td>";
						  echo "<td>".$option1."</td>";
						  echo "<td>".$option2."</td>";
						  echo "<td>".$option3."</td>";
					    echo "<td>".$option4."</td>";
					    echo "<td>".$answer."</td>";
              echo "<td>".$edit."</td>";
					    echo  "<td><a href = 'delete_question.php?id=$id&id1=$id1'>Delete</a></td>";
              echo "</tr>";
            }
        

           ?>

            
				
			</thead>
			</table>

		</div>
	</div>
</div>


</body>
</html>

