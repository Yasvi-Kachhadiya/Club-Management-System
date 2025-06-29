<?php
require("../dbconnect.php");

if(isset($_REQUEST["uid"])){
	$sql="select * from studentinfo where username='".$_REQUEST["uid"]."'";	
	$a=getDataFromDB($sql);
	foreach($a as $v){
		echo "<p>".$v["name"]." user ID : ".$v["username"]."</p>";
	}
}
?>