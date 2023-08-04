<?php
require "database.php";
if (isset($_POST["update_question"])) {
   $question = mysqli_real_escape_string($con,$_POST["question"]);
   $option1 = mysqli_real_escape_string($con,$_POST["option1"]);
   $option2 = mysqli_real_escape_string($con,$_POST["option2"]);
   $option3 = mysqli_real_escape_string($con,$_POST["option3"]);	
   $option4 = mysqli_real_escape_string($con,$_POST["option4"]);
   $answer_id = mysqli_real_escape_string($con,$_POST["answer_id"]);
   $row_id = mysqli_real_escape_string($con,$_POST["row_id"]);
   $exam_category = mysqli_real_escape_string($con,$_POST["exam_category"]);
 
  $sql = "UPDATE questions SET question = '$question', opt1 = '$option1', opt2 = '$option2', opt3 = '$option3', opt4 = '$option4', answer = '$answer_id' WHERE id = '$row_id'";
  $query = mysqli_query($con,$sql);
  if ($query) {
  	echo "1";
  }else{
  	echo "2";
  }




}
?>