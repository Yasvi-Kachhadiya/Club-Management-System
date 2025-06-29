<?php
function getDataFromDB($sql){
	include '../dbconnect.php';
	$result = mysqli_query($db, $sql)or die(mysqli_error($db));
	$stmt = $db->prepare($sql);
	  $stmt->execute();
	  }
?>

<style type="text/css">
	.updated a:hover{
		transform: scale(1.2);
	}
</style>