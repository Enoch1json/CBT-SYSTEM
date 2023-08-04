<!DOCTYPE html>
<html>
<head>
	<title>modal example</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<a href="user_login.php">login</a>
	<button id="submit" class="btn btn-primary pull-right" data-toggle="modal" data-target = "#SubmitModal">SUBMIT</button>
      <div style="margin-top: 7%" class="modal" data-keyboard="false" data-backdrop="static" id="SubmitModal" tabindex="-1">
      	<div class="modal-dialog">
      		<div class="modal-content">
      			<div style="display: block;" class="modal-header">
      				<h3 style="text-align: center; font-weight: bold;font-style: vandana; color: rgb(50,50,60);" class="modal-title">COMFIRM SUBMISSION</h3>
      			</div>
      			<div style="text-align: center;" class="modal-body">
      				<span style="font-size: 23px; font-family: serif;"  class="text-primary">You're done with your Exam, do you want to submit?</span>
      			</div>
      			<div style="display: block;" class="modal-footer">
      				<button id="yes" style="margin-left: 38px; width: 100px; font-size: 20px" class="btn btn-primary">Yes</button> 
      				<button id="no" style="margin-left: 38%; width: 100px;font-size: 20px" class="btn btn-primary">No</button>
      			</div>
      		</div>
      	</div>
      	
      </div>
<script src="assets/js/jquery.min.js"></script>      
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
       $("#submit").click(function(){
            $("#SubmitModal").show();
            //alert("working");
       });
	});
</script>
</body>
</html>