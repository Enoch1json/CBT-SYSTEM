<?php
$error = "";
$error1 = "";
$error2 = "";
$error3 = "";
$error4 = "";
$error5 = "";
$error6 = "";
$error7 = "";
$error8 = "";
$error9 = "";
$error0 = "";

require "database.php";
session_start();
 if (isset($_SESSION["email"])) {
   $email = $_SESSION["email"];

   $sql = "SELECT * FROM online_exam_table WHERE admin_email = '$email'";
   $sql_query = mysqli_query($con,$sql);
   $query_row = mysqli_num_rows($sql_query);
   $fetch = mysqli_fetch_all($sql_query,MYSQLI_ASSOC);
    // $data = array();
    foreach ($fetch as $row) {
        $error = $row["online_exam_title"];
    	
        $error1 = $row["online_exam_datetime"];
        $error2 = $row["online_exam_duration"].'Minute';
        $error3 = $row["total_question"].'Question';
        $error4 = $row["marks_per_right_answer"].'mark';
        $error5 = $row["marks_per_wrong_answer"].'mark';
        $error6 = $row["online_exam_created_on"];
        $error7 = $row["online_exam_status"];
        $error8 = $row["online_exam_code"];
        $error9 = $row["online_exam_title"];
        $error0 = $row["online_exam_title"];

    }
     


}
?>