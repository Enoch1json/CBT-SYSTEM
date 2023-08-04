<?php
require "database.php";
$id = $_GET["id"];
$id1 = $_GET["id1"];
$delete = "DELETE FROM questions WHERE id = '$id'";
$query = mysqli_query($con,$delete);
?>

<script type="text/javascript">
	window.location = "view_question.php?id=<?php echo $id1 ?>";
</script>