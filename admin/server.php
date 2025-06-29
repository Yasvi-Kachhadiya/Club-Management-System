<?php 

$db = mysqli_connect("localhost","root","","club");
if(!$db){
	die("Connection failed: ".mysql_connect_error());
}

$query = "SELECT * FROM clubinfo";
		$results = mysqli_query($db, $query);

		
        echo '<select name="club" size="1">';
		echo '<option value="0">select club</option>';
		while($row = mysqli_fetch_assoc($results)) {
        echo '<option value="' . $row['id'] . '">' . $row['clubname'] . '</option>';		
	}
   echo '</select>';


 ?>