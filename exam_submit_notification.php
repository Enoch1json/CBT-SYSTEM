<!DOCTYPE html>
<html>
<head>
	<title>Exam submission notification</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
      <div style="margin-top: 7%" class="modal" data-keyboard="false" data-backdrop="static" id="SubmitModal" tabindex="-1">
      	<div class="modal-dialog">
      		<div class="modal-content">
      			<div style="display: block;" class="modal-header">
      				<h3 style="text-align: center; font-weight: bold;font-style: vandana; color: rgb(50,50,60);" class="modal-title">EXAM NOTIFICATION</h3>
      			</div>
      			<div style="text-align: center;" class="modal-body">
      				<span style="font-size: 23px; font-family: serif;"  class="text-primary">Your Examination has been submitted automatically....Kindly leave the examination hall. Wish you success!</span>
      			</div>
      			<div style="display: block;" class="modal-footer">
      				<button id="ok" style="margin-left: 38%; width: 100px;font-size: 20px" class="btn btn-primary">OK</button>
      			</div>
      		</div>
      	</div>
      	
      </div>
<script src="assets/js/jquery.min.js"></script>      
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
     $("#SubmitModal").modal("toggle");
     $("#ok").click(function(){
       window.location = "user_login.php";
     });
	});
</script>
</body>
</html>