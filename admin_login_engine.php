<?php
session_start();
require "database.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["login"])) {
     $username = mysqli_real_escape_string($con, $_POST["username"]);
     $password = mysqli_real_escape_string($con, $_POST["password"]);
     $en_password = md5($password);
     //checking for username
     $sql = "SELECT * FROM admin_registration WHERE username = '$username' ";
     $sql_query = mysqli_query($con, $sql);
    $rows = mysqli_num_rows($sql_query);
    
    //checking for password
     $fetch = mysqli_fetch_assoc($sql_query);
      $query_pass = $fetch['password_id'];
           
      if ($rows !== 1) {
       echo "Invalid username/password";
     }
     else if($en_password !== $query_pass){
         echo "Invalid username/password";
     }else{
         echo "1";
        // header("location:user.php");
        // $_SESSION["username"] = $fetch["username"];
         $_SESSION["firstname"] = $fetch["firstname"];
         $_SESSION["othername"] = $fetch["othername"];
         $_SESSION["email"]    = $fetch["email"];
      

     }



  }
}

?>