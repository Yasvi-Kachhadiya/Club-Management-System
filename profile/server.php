<?php
include("db_rw.php");
	if(isset($_REQUEST["username"])){

	$flag = 0;
	$mssg = "not updated";

	if(empty($_REQUEST["phone"]) || empty($_REQUEST["email"]) || 
		empty($_REQUEST["dobd"]) || empty($_REQUEST["dobm"]) || empty($_REQUEST["doby"])
		|| empty($_REQUEST["year"]) || empty($_REQUEST["dpt"]) || empty($_REQUEST["smster"])
		|| empty($_REQUEST["gndr"])){

		$a= $mssg;
	}

	if($_REQUEST["phone"]!=null){
		if(strlen($_REQUEST["phone"])==10){
			$sql="UPDATE studentinfo SET phone='".$_REQUEST["phone"]."' where username='".$_REQUEST["username"]."'";
			$a=getDataFromDB($sql);

	$flag = 1;
		}
	
	

	}
	if($_REQUEST["email"]!=null && (filter_var($_REQUEST["email"],FILTER_VALIDATE_EMAIL))){
	$sql="UPDATE studentinfo SET email='".$_REQUEST["email"]."' where username='".$_REQUEST["username"]."'";
	$a=getDataFromDB($sql);

		$flag = 1;
	}
	if($_REQUEST["dobr"]!=null && !empty($_REQUEST["dobd"]) && !empty($_REQUEST["dobm"]) && !empty($_REQUEST["doby"])){

		$date = $_REQUEST["dobd"]."-".$_REQUEST["dobm"]."-".$_REQUEST["doby"];

		$sql="UPDATE studentinfo SET dob='".$date."' where username='".$_REQUEST["username"]."'";
			$a=getDataFromDB($sql);
			$flag = 1;   
	}
	if($_REQUEST["year"]!=null && $_REQUEST["year"]<2023){
	$sql="UPDATE studentinfo SET admissionyear='".$_REQUEST["year"]."' where username='".$_REQUEST["username"]."'";
	$a=getDataFromDB($sql);
	$flag = 1;
	}
	if($_REQUEST["dpt"]!="Select Department"){
	$sql="UPDATE studentinfo SET dept='".$_REQUEST["dpt"]."' where username='".$_REQUEST["username"]."'";
	$a=getDataFromDB($sql);
	$flag = 1;
	}
	if($_REQUEST["smster"]!="Select Semester"){
	$sql="UPDATE studentinfo SET semester='".$_REQUEST["smster"]."' where username='".$_REQUEST["username"]."'";
	$a=getDataFromDB($sql);
	$flag = 1;
	}
	
	if($_REQUEST["gndr"]!="Select Gender"){
	$sql="UPDATE studentinfo SET gender='".$_REQUEST["gndr"]."' where username='".$_REQUEST["username"]."'";
	$a=getDataFromDB($sql);
	$flag = 1;
	}
	if($flag = 1){
	echo "<h3 class='updated' style='
font-family: Tw Cen MT,ROBOTO,helvetica;
margin-left:38%;
margin-right:38%;
color: rgb(86, 132, 46);
width: 200px;
background-color: rgb(216, 235, 198);
text-align: center;
border-radius:20px;
padding: 5px 5px;
border: 1px solid rgb(86, 132, 46);
margin-top: 20px;'>
	 Updated successfully.&nbsp;<a style=' transition: all 400ms; text-decoration: none; color: rgb(86, 132, 46);' href='profile.php' class='fa fa-refresh' aria-hidden='true'></a></h3>";
	}
	

}
	
	



?>