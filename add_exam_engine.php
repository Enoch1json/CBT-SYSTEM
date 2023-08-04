<?php 
require "database.php";
 if (isset($_POST["add_exam"])) {
 	$exam_category = mysqli_real_escape_string($con,$_POST["exam_category"]);
    $exam_duration = mysqli_real_escape_string($con,$_POST["exam_duration"]);
    
    $sql = "INSERT INTO exam_category(category,exam_duration_minute) VALUES('$exam_category','$exam_duration')";
    $query = mysqli_query($con,$sql);
    if ($query) {
    	echo "1";
    }elseif (!$query) {
    	echo "2";
    }




}
 ?>