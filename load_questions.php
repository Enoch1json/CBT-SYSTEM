<?php 
  session_start();
  require "database.php";
  if (isset($_POST["exam_category"]) && isset($_POST["question_no"])) {
    $user_id = $_GET["user_id"];
  	$exam_category = $_POST["exam_category"];
  	$question_no = $_POST["question_no"];
    
    
  	$questionno = "";
  	$question = "";
  	$option1 = "";
  	$option2 = "";
  	$option3 = "";
  	$option4 = "";          
  	$answer = "";
  	$ans = "";
          //query for setting selected option to checked state......
          $sql = mysqli_query($con,"SELECT * FROM user_answer WHERE user_id = '$user_id' AND question_no = '$question_no' ");
          if (mysqli_num_rows($sql)>0) {
          $sql_data = mysqli_fetch_assoc($sql);
          $ans = $sql_data["option_selected"];
          //echo $ans;
          }
         
    
   
  	$query = mysqli_query($con,"SELECT * FROM questions WHERE category = '$exam_category' AND question_no = '$question_no'");
    $row = mysqli_num_rows($query);
    if ($row == 0) {
      echo "over";
    }else{

  	while ($row = mysqli_fetch_array($query)) {
  		      $questionno = $row["question_no"];
  		      $question = $row["question"];
  		      $option1 = $row["opt1"];
  		      $option2 = $row["opt2"];
  		      $option3 = $row["opt3"];
  		      $option4 = $row["opt4"];
  		      $answer = $row["answer"];
  	}
         ?>
         <div style="transform: translate(-50%,-50%);position: absolute;left: 50%;top: 40%; padding-top: 5% ;font-size: 20px;font-family: vandana">
             <table style="padding-top: 0px; font-size: 25px; font-family: vandana">
               <tr>
                 <td>Question No.<?php echo "$questionno ".$question;  ?></td>
               </tr>
            </table>
              <input type="hidden" name="" id="question_answer" value="<?php echo $answer; ?>">
            <table style="display: inline-block; padding-bottom: 0px">
            	<tr >
                 <td><input type="radio" name="r1" id="r1" value="<?php echo $option1 ?>" onclick = "radioclick(this.value,<?php echo $questionno; ?>)" <?php if ($ans === $option1) {
                 	echo "checked";
                 } ?>>
             </td>
             <td style="margin-left: 10%"><?php if (strpos($option1, "image_database/") !== false) {
             	?>
             	<img src="<?php echo $option1 ?>" width = "50" height = "50">
             	<?php 
             }else{
             	echo $option1;
             }
              ?></td>
              </tr>

              <tr >
                 <td><input type="radio" name="r1" id="r1" value="<?php echo $option2 ?>" onclick = "radioclick(this.value,<?php echo $questionno; ?>)" <?php if ($ans === $option2) {
                 	echo "checked";
                 } ?>>
             </td>
             <td style="margin-left: 10%"><?php if (strpos($option2, "image_database/") !== false) {
             	?>
             	<img src="<?php echo $option2 ?>" width = "50" height = "50">
             	<?php 
             }else{
             	echo $option2;
             }
              ?></td>
              </tr>

              <tr >
                 <td><input type="radio" name="r1" id="r1" value="<?php echo $option3 ?>" onclick = "radioclick(this.value,<?php echo $questionno; ?>)" <?php if ($ans === $option3) {
                 	echo "checked";
                 } ?>>
             </td>
             <td style="margin-left: 10%"><?php if (strpos($option3, "image_database/") !== false) {
             	?>
             	<img src="<?php echo $option3 ?>" width = "50" height = "50">
             	<?php 
             }else{
             	echo $option3;
             }
              ?></td>
              </tr>

              <tr >
                 <td><input type="radio" name="r1" id="r1" value="<?php echo $option4 ?>" onclick = "radioclick(this.value,<?php echo $questionno; ?>)" <?php if ($ans === $option4) {
                 	echo "checked";
                 } ?>>
             </td>
             <td style="margin-left: 10%"><?php if (strpos($option4, "image_database/") !== false) {
             	?>
             	<img src="<?php echo $option4 ?>" width = "50" height = "50">
             	<?php 
             }else{
             	echo $option4;
             }
              ?></td>
              </tr>


              
            </table>

    </div>         
  	      
         <?php

}
  	     
         





  }
 ?>