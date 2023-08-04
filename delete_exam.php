<?php
require "database.php";
 $id = $_GET["id"];
 $sql = "DELETE FROM exam_category WHERE id = '$id'";
 $query = mysqli_query($con,$sql);
 ?>
<script type="text/javascript">
	window.location = "exam.php";
</script>
