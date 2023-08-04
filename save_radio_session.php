<?php 
session_start();
require "database.php";
 if (isset($_POST["radiovalue"]) && isset($_POST["questionno"])) {
 	  $user_id = $_GET["user_id"];
    $value =  $_POST["radiovalue"];
    $questionno = $_POST["questionno"];
    $answer = $_GET["answer"];
    $exam_category = $_GET["category"];
    $right_mark = 1;
    $wrong_mark = 0;
    $initial_right = 0;
    $initial_wrong = 0;
    

 $query = mysqli_query($con,"SELECT * FROM user_answer WHERE user_id = '$user_id' AND question_no = '$questionno'");
 $row = mysqli_num_rows($query);
 if ($row == 0) {
 	$insert = mysqli_query($con,"INSERT INTO user_answer(user_id,exam_category,question_no,option_selected,answer,right_answer,wrong_answer) VALUES('$user_id','$exam_category','$questionno','$value','$answer','$initial_right','$initial_wrong')");
 	//checking answer and selected option
   $query_fetch = mysqli_query($con,"SELECT * FROM user_answer WHERE user_id = '$user_id' AND question_no = '$questionno'");
   $query_data = mysqli_fetch_assoc($query_fetch);
   $option_selected_db = $query_data["option_selected"];
   $answer_db = $query_data["answer"];
   if ($option_selected_db === $answer_db) {
   	 $action = "UPDATE user_answer SET right_answer = '$right_mark', wrong_answer = '$wrong_mark' WHERE user_id = '$user_id' AND question_no = '$questionno' ";
   	 $query_action = mysqli_query($con,$action);
   }else{
       $action = "UPDATE user_answer SET right_answer = '$wrong_mark', wrong_answer = '$right_mark' WHERE user_id = '$user_id' AND question_no = '$questionno' ";
   	 $query_action = mysqli_query($con,$action);
   }
 	
 }elseif ($row > 0) {
 	$update = "UPDATE user_answer SET option_selected = '$value' WHERE user_id = '$user_id' AND question_no = '$questionno' ";
 	$query = mysqli_query($con,$update);
 	 //checking answer and selected option
 	  $query_fetch = mysqli_query($con,"SELECT * FROM user_answer WHERE user_id = '$user_id' AND question_no = '$questionno'");
   $query_data = mysqli_fetch_assoc($query_fetch);
   $option_selected_db = $query_data["option_selected"];
   $answer_db = $query_data["answer"];
   if ($option_selected_db === $answer_db) {
   	 $action = "UPDATE user_answer SET right_answer = '$right_mark', wrong_answer = '$wrong_mark' WHERE user_id = '$user_id' AND question_no = '$questionno' ";
   	 $query_action = mysqli_query($con,$action);
   }else{
       $action = "UPDATE user_answer SET right_answer = '$wrong_mark', wrong_answer = '$right_mark' WHERE user_id = '$user_id' AND question_no = '$questionno' ";
   	 $query_action = mysqli_query($con,$action);
   }

    
   }
  // echo "1";
 }

 ?>