<?php

$db = mysqli_connect("localhost","root","","club");

if(!$db){
	die("Connection failed : ".mysqli_connect_error());

}
?>