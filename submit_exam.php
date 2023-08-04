<?php 
require "database.php";
session_start();
    if (!isset($_SESSION["username"])) {
       header("location:user_login.php"); 
    }else{
    	$user_id = $_GET["user_id"];
    	$user_session = $_SESSION["username"];
      $exam_category = $_GET["exam_category"];

     // quering sum of the total right answer.....
      $sql = "SELECT SUM(right_answer) FROM user_answer WHERE user_id = '$user_id' ";
    	$query = mysqli_query($con,$sql);
    	while ($row = mysqli_fetch_array($query)) {
    	         $total = $row["SUM(right_answer)"];
    	}

     //quering the exam total question.......
      $sql = mysqli_query($con,"SELECT * FROM exam_category WHERE category = '$exam_category'");
        $data = mysqli_fetch_assoc($sql);
        $total_question = $data["numbers_of_questions"];
        
      
       //calculating the score in percentage.....
       // $score_per = $total/($total_question*2)*100;
        $score_per = $total*2;
       // formatting score....
       $format = number_format($score_per,0,'.','');

       //counting total numbers of question answered
       $sql_count = "SELECT COUNT(question_no) FROM user_answer WHERE user_id = '$user_id'";
       $query_count = mysqli_query($con,$sql_count);
       while ($count = mysqli_fetch_array($query_count)) {
          $total_no_question_answered = $count["COUNT(question_no)"];
        }

   $query_insert = mysqli_query($con,"INSERT INTO student_result(exam_category,user_id,total_question,total_question_answered,total_mark) VALUES('$exam_category','$user_id','$total_question','$total_no_question_answered','$score_per')");
    
    //packing up student exam detail from user_answer table....Query starts here...
    $sql = mysqli_query($con,"SELECT * FROM user_answer WHERE user_id = '$user_id' AND exam_category = '$exam_category' ");
    while ($data = mysqli_fetch_array($sql)) {
        $user_id = $data["user_id"];
        $exam_category = $data["exam_category"];
        $question_no = $data["question_no"];
        $option_selected = $data["option_selected"];
        $answer = $data["answer"]; 
        $right_answer = $data["right_answer"];
        $wrong_answer = $data["wrong_answer"];

       
    //inserting the data collected from user_answer table into user_exam_answer_record
    $insert = mysqli_query($con,"INSERT INTO user_exam_answer_record(user_id,exam_category,question_no,option_selected,answer,right_answer,wrong_answer) VALUES('$user_id','$exam_category','$question_no','$option_selected','$answer','$right_answer','$wrong_answer')");

    //delecting the student exam data from user_answer table..... 
       if ($insert) {
      $delete_query = mysqli_query($con,"DELETE FROM user_answer WHERE user_id = '$user_id' AND exam_category = '$exam_category'");  
       }
     }
      $delect_user_login = mysqli_query($con,"DELETE FROM user_login WHERE user_id = '$user_id'");
       
    }
   session_destroy(); 
  ?>
<script type="text/javascript">
	window.location = "exam_submit_notification.php";
</script>