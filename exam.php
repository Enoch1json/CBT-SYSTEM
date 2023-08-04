<?php
  // require "list_all_exam.php";
session_start();
     if (!isset($_SESSION["email"])) {
    	header("location: admin_login.php");
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
				<h3 style="font-family: vandana" class="panel-title">Online Exam List</h3>
			</div>
			<div class="col-md-3" align="right">
				
				<a href="add_exam.php"><button type="button" id="add_exam" class="btn btn-info btn-sm">Add</button></a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="exam_data_table" class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>S/N</th>
						<th>Exam Category</th>
						<th>Exam Duration in minute</th>
						<th>Edit Exam</th>
						<th>Delete Exam</th>
					    <th>Question</th>
					    <th>View Question</th>
					</tr>
           
     

					<?php 
				require "database.php";
				$sql = "SELECT * FROM exam_category ";
				$query = mysqli_query($con,$sql);
				$count = 0;
				while ($row = mysqli_fetch_array($query)) {
					$count = $count + 1;
					echo "
                    <tr>
						<th>".$count."</th>
						<th>".$row['category']."</th>
						<th>".$row['exam_duration_minute']."</th>
						<th><a href = 'edit_exam.php?id= ".$row['id']."'>Edit Exam</a></th>
						<th><a href = 'delete_exam.php?id= ".$row['id']."'>Delete Exam</a></th>
						<th><a href = 'add_question.php?id= ".$row['id']."'>Add Question</a></th>
						<th><a href = 'view_question.php?id= ".$row['id']."'>View</a></th>
					</tr>
					";
					
           
				}
			
                     ?>
									</thead>
			</table>

		</div>
	</div>
</div>


</body>
</html>

