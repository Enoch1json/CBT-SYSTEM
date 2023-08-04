<?php
session_start();
 if (isset($_POST["time"])) {
 	$time = $_POST["time"];

 	$_SESSION["time"] = $time;

    $from_time1 = date("Y-m-d H:i:s");
 	$to_time1 = $_SESSION["time"];
  
    $first_time = strtotime($from_time1);
    $second_time = strtotime($to_time1);

    $diff_sec = $second_time - $first_time;

    echo gmdate("H:i:s",$diff_sec);
 


}

  ?>