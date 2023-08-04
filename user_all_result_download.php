<?php 
 session_start();
 if (!isset($_SESSION["username"])) {
  header("location:user_login.php");
}
 require "database.php";
 require "class/autoload.php";
 $mpdf = new \Mpdf\MPdf();

 $firstname = $_SESSION["firstname"];
 $othername = $_SESSION["othername"];
 $email =  $_SESSION["email"];
 $user_id =  $_SESSION["username"];

 $data = "
       <div id = data>
          <div id='head'>
          <h3 id='head1'>JETBRIAN DEVELOPMENT ACADEMY</h3>
            <h4 id='head2'>STUDENT RESULT DETAILS</h4>
          </div>
          <div id='side_div'>
            <span id='span1'>Name:</span> <span id='span2'>".$firstname." ".$othername."</span>
            <br>
            <span id='span1'>E-mail: </span><span id='span2'>".$email."</span>
          </div>
                 <table id='table'>
                  <tr id='tr'>
                    <th>Exam Title</th>
                    <th>Total Question</th>
                    <th>Total Question Answered</th>
                    <th>Score</td>
                  </tr>
";

 $sql = mysqli_query($con,"SELECT * FROM student_result WHERE user_id = '$user_id'");
  while ($row = mysqli_fetch_array($sql)) {
  	 $exam_category = $row["exam_category"];
  	 $total_question = $row["total_question"];
  	 $total_question_answered = $row["total_question_answered"];
  	 $total_mark = $row["total_mark"];
  $data .= "
                   <tr id='tr'>
                      <td>".$exam_category."</td>
                      <td>".$total_question."</td>
                      <td>".$total_question_answered."</td>
                      <td>".$total_mark."%</td>
                    </tr>
  ";
}
  $data .= "  </table>
          </div>
          ";
 //iitiating pdf format.... 
 
$css = file_get_contents("style.css");
$mpdf->setWatermarkText("JETBRIAN",0.3);
$mpdf->showWatermarkText = true;
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($data);
$mpdf->Output($firstname." ".$othername." Exam result.pdf","I");
   




 ?>