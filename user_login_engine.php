<?php
session_start();
require "database.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	if (isset($_POST["login"])) {
     $username = mysqli_real_escape_string($con, $_POST["username"]);
     $password = mysqli_real_escape_string($con, $_POST["password"]);
     $en_password = md5($password);
     //checking for username
  $sql = "SELECT * FROM user_registration WHERE username = '$username' AND password_id = '$en_password' ";
     $sql_query = mysqli_query($con, $sql);
     $rows = mysqli_num_rows($sql_query);
    
    //checking for password
     // $fetch = mysqli_fetch_assoc($sql_query);
     //  $query_pass = $fetch['password_id'];
           
      if ($rows !== 1) {
     	 echo "Invalid username/password";
     }
     else if($rows !== 1){
         echo "Invalid username/password";
     }else{
     //checking mayble user/student as already started exam.....
          $sql = mysqli_query($con,"SELECT * FROM user_login WHERE user_id = '$username' AND exam_status = '1' ");
               $sql_row = mysqli_num_rows($sql);
               if ($sql_row > 0) {
            //execute noting....
               }else{
       $sql = mysqli_query($con,"INSERT INTO user_login(user_id,exam_category,exam_duration,exam_status)VALUES('$username','0','0','0') "); 
               }
               
         echo "1";
        // header("location:user.php");
         $fetch = mysqli_fetch_assoc($sql_query);
         $_SESSION["username"] = $fetch["username"];
         $_SESSION["firstname"] = $fetch["firstname"];
         $_SESSION["othername"] = $fetch["othername"];
         $_SESSION["email"]    = $fetch["email"];
     	

     }



	}
}

?>