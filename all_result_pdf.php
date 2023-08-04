       

<?php 
require "database.php";
session_start();
$exam_category = "";
$total_question = "";
$total_question_answered = "";
$total_mark = "";
 $firstname = $_SESSION["firstname"];
 $othername = $_SESSION["othername"];
 $email =  $_SESSION["email"];
 $user_id =  $_SESSION["username"];
     ?>
 <div style="margin-top: 30px">
          <center>
          <h3>JETBARIAN DEVELOPMENT ACADEMY</h3>
            <h4 style="font-family: vandana; font-style: oblique; font-size: 18x;">STUDENT RESULT DETAIL</h4>
          </center>
          <div style="margin-left: 50px;margin-top: 3%">
            <span style="font-size: 20px; font-weight: bold ">Name:</span> <span style="font-size: 22px; font-family: vandana"><?php echo $firstname." ". $othername ; ?> </span>
            <br>
            <span style="font-size: 20px;font-weight: bold">E-mail: </span><span style="font-size: 22px; font-family: vandana"><?php echo $email; ?> </span>
          </div>
           <center>
                 <table id="t" style="width: 60%;margin-top: 40px;text-align: center;">
                  <tr id="tr">
                    <th>Exam Title</th>
                    <th>Total Question</th>
                    <th>Total Question Answered</th>
                    <th>Score</td>

                  </tr>
              
  
          
 <?php

 $sql = mysqli_query($con,"SELECT * FROM student_result WHERE user_id = '$user_id'");
  while ($row = mysqli_fetch_array($sql)) {
  	 $exam_category = $row["exam_category"];
  	 $total_question = $row["total_question"];
  	 $total_question_answered = $row["total_question_answered"];
  	 $total_mark = $row["total_mark"];
          echo "
                     <tr id='tr'>
                    	<td>".$exam_category."</td>
                    	<td>".$total_question."</td>
                    	<td>".$total_question_answered."</td>
                    	<td>".$total_mark."</td>
                    </tr>

                
                               
        ";
                    "</table>";
 

          "</div>";
          "</center>";

}
?>
 
 