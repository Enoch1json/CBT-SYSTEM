<?php
require "database.php";
 if (isset($_POST["register"])) {
   $firstname = mysqli_real_escape_string($con,$_POST["firstname"]);
   $othername = mysqli_real_escape_string($con,$_POST["othername"]);
   $username = mysqli_real_escape_string($con,$_POST["username"]);
   $email = mysqli_real_escape_string($con,$_POST["email"]);
   $password =  mysqli_real_escape_string($con,$_POST["password"]);

   $en_password = md5($password);
    //email exist query
  $sql = "SELECT * FROM user_registration WHERE email = '$email' ";
  $query = mysqli_query($con,$sql);
  $rows = mysqli_num_rows($query);
  
  $sql1 = "SELECT * FROM user_registration WHERE username = '$username' ";
  $query1 = mysqli_query($con,$sql1);
  $rows1 = mysqli_num_rows($query1);

 
   //checking if email exist
  if ($rows > 0) {
       echo "1";
  }else if ($rows1 > 0) {
  	 echo "3";
  }else if ($rows == 0 && $rows1 == 0){
  	//inserting data into database
  	$sql =  "INSERT INTO user_registration(firstname,othername,username,email,password_id) VALUES('$firstname','$othername','$username','$email','$en_password')";
  	$sql_query = mysqli_query($con,$sql);
  	 if ($sql_query) {
  	 	echo 2;
  	 }
  }else{
  	echo "4";
  }













}
  ?>