<?php
include '../dbconnect.php';

if(isset($_REQUEST["uname"])){
	$sql="select * from studentinfo where name like '".$_REQUEST["uname"]."%' OR username like '".$_REQUEST["uname"]."%'";

	$a=getDataFromDB($sql);

	foreach($a as $v){
		
		echo "<a href='details.php?uid=".$v['username']."'>".$v["name"]."</a><br/>";

	}
}

?>