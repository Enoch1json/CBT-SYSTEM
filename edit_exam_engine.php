<?php 
require "database.php";
if (isset($_POST["update_exam"])) {
 $category = mysqli_real_escape_string($con,$_POST["exam_category"]);
 $duration = mysqli_real_escape_string($con,$_POST["exam_duration"]);
 $row = mysqli_real_escape_string($con,$_POST["row"]);
 
 $sql = "UPDATE exam_category SET category = '$category', exam_duration_minute = '$duration' WHERE id = '$row'";
 $query = mysqli_query($con,$sql);
 if ($query) {
 	echo "1";
 	 }else{
 	echo "2";
 }
}
 ?>