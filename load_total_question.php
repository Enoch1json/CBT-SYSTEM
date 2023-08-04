<?php 
session_start();
require "database.php";
if (isset($_POST["exam_category"])) {
  $exam_category = $_POST["exam_category"];

  $query = mysqli_query($con,"SELECT * FROM questions WHERE category = '$exam_category'");
  $row = mysqli_num_rows($query);
  echo $row; 

}
?>