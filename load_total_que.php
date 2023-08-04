<?php 

session_start();
require "database.php";
$total_que = 0;

$query = mysqli_query($con,"SELECT * FROM questions WHERE category = '$_SESSION[exam_category]'");
$total_que = mysqli_num_rows($query);
echo $total_que;


 ?>