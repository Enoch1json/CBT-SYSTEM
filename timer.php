<?php
session_start();
//echo $_SESSION["end_time"];


  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>timer</title>
  </head>
  <body>
    <center><span style="font-size: 40px" id="timer"></span></center>
    
     <input type="hidden" id="time" name="" value="<?php echo $_SESSION["end_time"]; ?>">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    	var time = $("#time").val();
      setInterval(function(){
       $.post("response.php",{time : time},function(data){
              $("#timer").text(data);
       });
      },1000);
    </script>
  </body>
  </html>