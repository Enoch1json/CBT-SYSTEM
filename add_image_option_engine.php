<?php 
 require "database.php";
 if ($_POST["action"] == "add") {
 	 $tmp = md5(time());
     
     $id = mysqli_real_escape_string($con,$_POST["row_id"]);
     $exam_category = mysqli_real_escape_string($con,$_POST["exam_category"]);
     $question = mysqli_real_escape_string($con,$_POST["question"]);
     
     $loop = 0;
     $sql1 = "SELECT * FROM questions WHERE category = '$exam_category' ORDER BY id ASC";
     $query = mysqli_query($con,$sql1);
     $row = mysqli_num_rows($query);
     if ($row == 0) {
     
     }else{
     	while ($row2 = mysqli_fetch_array($query)) {
     	  $loop = $loop + 1;
     	  $id = $row2["id"];
     	  $sql_update = "UPDATE questions SET question_no = '$loop' WHERE id = '$id'";
     	  $query_update = mysqli_query($con,$sql_update);

     	}
     }


       $tmp = md5(time());
 	 $option1 = $_FILES["option1"]["name"].$tmp;
 	 $location1 = "image_database/".$option1;
 	 $db1 = "image_database/".$option1;
 	 move_uploaded_file($_FILES["option1"]["tmp_name"], $location1);

 	 $option2 = $_FILES["option2"]["name"].$tmp;
 	 $location2 = "image_database/".$option2;
 	 $db2 = "image_database/".$option2;
 	 move_uploaded_file($_FILES["option2"]["tmp_name"], $location2);

 	 $option3 = $_FILES["option3"]["name"].$tmp;
 	 $location3 = "image_database/".$option3;
 	 $db3 = "image_database/".$option3;
 	 move_uploaded_file($_FILES["option3"]["tmp_name"], $location3);

 	 $option4 = $_FILES["option4"]["name"].$tmp;
 	 $location4 = "image_database/".$option4;
 	 $db4 = "image_database/".$option4;
 	 move_uploaded_file($_FILES["option4"]["tmp_name"], $location4);

 	 $answer = $_FILES["answer"]["name"].$tmp;
 	 $location5 = "image_database/".$answer;
 	 $db5 = "image_database/".$answer;
 	 move_uploaded_file($_FILES["answer"]["tmp_name"], $location5);

    
    $loop = $loop + 1;
    $sql = "INSERT INTO questions(question_no,question,opt1,opt2,opt3,opt4,answer,category) VALUES('$loop','$question','$db1','$db2','$db3','$db4','$db5','$exam_category')";
    $sql_query = mysqli_query($con,$sql);
    if ($sql_query) {
    	echo "1";
    }else{
    	echo "2";
    }
 	




 }
 ?>