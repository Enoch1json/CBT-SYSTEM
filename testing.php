<?php 
 require "database.php";
 session_start();
 $query = mysqli_query($con,"SELECT * FROM exam_category");
 while ($row = mysqli_fetch_array($query)) {
    $duration = $row["exam_duration_minute"];
 }
 
  $_SESSION["duration"] = $duration;
  $_SESSION["start_time"] = date("Y-m-d H:i:s");

$end_time = date("Y-m-d H:i:s",strtotime("+".$_SESSION["duration"]."minutes", strtotime($_SESSION["start_time"])));
$_SESSION["end_time"] = $end_time;


 ?>
 <script type="text/javascript">
   window.location = "timer.php";
 </script>