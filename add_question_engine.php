<?php
require "database.php";
if (isset($_POST["add_question"])) {
 $question = mysqli_real_escape_string($con,$_POST["question"]);
 $option1 = mysqli_real_escape_string($con,$_POST["option1"]);
 $option2 = mysqli_real_escape_string($con,$_POST["option2"]);
 $option3 = mysqli_real_escape_string($con,$_POST["option3"]);	
 $option4 = mysqli_real_escape_string($con,$_POST["option4"]);
 $answer_id = mysqli_real_escape_string($con,$_POST["answer_id"]);
 $row_id = mysqli_real_escape_string($con,$_POST["row_id"]);
 $exam_category = mysqli_real_escape_string($con,$_POST["exam_category"]);
 
 
  $loop = 0;
  $sql1 = "SELECT * FROM questions WHERE category = '$exam_category' ORDER BY id ASC";
  $query1 = mysqli_query($con,$sql1);
  $row1 = mysqli_num_rows($query1);
  if ($row1 == 0) {
  	
  }else{
   while ($row = mysqli_fetch_array($query1)) {
   	$id = $row["id"];
   	 $loop = $loop + 1;
   	 $sql = "UPDATE questions SET question_no = '$loop' WHERE id = '$id' ";
   	 $query = mysqli_query($con,$sql);
   }

  }
   $loop = $loop + 1;
   $insert = "INSERT INTO questions(question_no,question,opt1,opt2,opt3,opt4,answer,category) VALUES('$loop','$question','$option1','$option2','$option3','$option4','$answer_id','$exam_category')";
   $query_insert = mysqli_query($con,$insert);
   if ($query_insert) {
   	   echo "1";
   }

}
?>







