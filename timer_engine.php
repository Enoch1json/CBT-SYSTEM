<?php 
require "database.php";
session_start();
if (!isset($_POST["time"])) {
	header("location:user_login.php");
}
if (isset($_POST["time"])) {
     $exam_category = $_POST["exam_category"];
     $user_id = $_POST["user_id"];

	$duration = $_POST["time"];
    
    $_SESSION["duration"] = $duration;

    $start_time = date("Y-m-d H:i:s");
    $actual_time = $_SESSION["duration"];

    $current_time = strtotime($start_time);
    $end_time = strtotime($actual_time);

    $diff_sec = $end_time - $current_time;
    
    $time_left = gmdate("H:i:s",$diff_sec);
   
    //calculating the remain time in minute for database update...
    $diff_into_minute = $diff_sec/60;
    //rounding the time up...
    $round_up = number_format($diff_into_minute,0,".","");
   //updating remaining time into user table in database....
    $sql = mysqli_query($con, "UPDATE user_login SET exam_category = '$exam_category', exam_duration = '$round_up', exam_status = '1' WHERE user_id = '$user_id' ");
    //.............update ends here

    echo $time_left;
    
}
 ?>