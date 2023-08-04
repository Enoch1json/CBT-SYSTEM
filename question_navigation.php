<?php
require "database.php";
if (isset($_POST["all_question"])) {
	$all_question = $_POST["all_question"];
    $user_id = $_POST["user_id"];
	     for ($i=1; $i <= $all_question; $i++) { 
	     	$sql = mysqli_query($con,"SELECT * FROM user_answer WHERE user_id =  '$user_id' AND question_no = '$i' ");
	     	$row = mysqli_num_rows($sql);
	     	if ($row > 0) {
	    echo "<button id='bt' class='question_navigate btn btn-primary' value = '".$i."' onclick ='navigate(this.value)'>".$i."</button>"." ";
	     	}else{
	     echo "<button id='bt' class='question_navigate btn btn-danger' value = '".$i."' onclick ='navigate(this.value)'>".$i."</button>"." ";		
	     	}
                     	
                    }
     		

}

               


  ?>